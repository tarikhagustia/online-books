<?php
class Book extends UserDashboard
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('book_m');
    $this->load->library('format');
    $this->load->helper('date');
    $this->load->helper('download');
  }
  public function view($book_url)
  {
    $data['book_data'] = $this->book_m->get_book_data($book_url);
    $data['page_title'] = $data['book_data']->book_name;
    $data['reader'] = $this->book_m->get_last_reader($book_url);
    $data['content'] = 'book/book_v';
    $this->templates->get_main_templates($data);
  }
  public function read($book_url)
  {
    $data['book'] = $this->book_m->get_book_data($book_url);
    if(empty($data['book'])):
      show_404();
    endif;
    if ($this->session->is_pay == true || $data['book']->is_free == true):
      $this->add_reader($data['book']->book_id);
    endif;
    $data['page_title'] = $data['book']->book_name;
    $data['meta']['title'] = $data['page_title'];
    $data['content'] = 'book/book_read_v';
    $this->templates->get_main_templates($data);
  }
  private function add_reader($book_id)
  {
    // Check if exist
    $data = $this->db->get_where('reader', ['user_id' => $this->session->user_id]);
    $data = $data->row();
    if(empty($data)):
      $insert = [
        'user_id' => $this->session->user_id,
        'book_id' => $book_id,
        'created_at' => date('Y-m-d H:i:s')
      ];
      $this->db->insert('reader' , $insert);
    endif;

  }
  public function download()
  {
    $book_url = $this->input->post('book_url');
    $data = $this->db->get_where('book', ['book_url' => $book_url]);
    $this->add_download($data->row()->book_id);
    $book_source = $data->row()->book_source;
    $data = $data->row()->book_name;
    force_download($book_source, NULL);
  }
  private function add_download($book_id)
  {
    $data = $this->db->get_where('download', ['user_id' => $this->session->user_id]);
    $data = $data->row();
    if(empty($data)):
      $insert = [
        'user_id' => $this->session->user_id,
        'book_id' => $book_id
      ];
      $this->db->insert('download' , $insert);
    endif;
  }
}
