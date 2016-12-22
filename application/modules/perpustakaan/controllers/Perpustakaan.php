<?php
class Perpustakaan extends UserDashboard
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('perpustakaan_m');
  }
  public function simpan($book_url)
  {

    $this->db->select('book_id')->from('book')
    ->where('book_url', $book_url);
    $get = $this->db->get()->row();
    $book_id = $get->book_id;
    $this->db->select('*')->from('library')
    ->where('user_id', $this->session->user_id)
    ->where('book_id', $book_id);
    $get = $this->db->get();
    if(count($get->result()) > 0):
      $this->session->set_flashdata('status', 'Materi ini sudah ada didalam Perpustakaan');
      redirect('book/view/'. $book_url);
    endif;
    $data = [
      'book_id' => $book_id,
      'user_id' => $this->session->user_id,
      'created_at' => date('Y-m-d H:i:s')
    ];
    $sql = $this->db->insert('library', $data);
    $this->session->set_flashdata('status' , 'Berhasil menambahkan Materi kedalam perpustakaan anda');
    redirect('library/list');
  }
  public function show()
  {
    $data['books'] = $this->perpustakaan_m->get_library();
    $data['content'] = 'perpustakaan/list_v';
    $data['page_title'] = 'Perpustakaan anda';
    $this->templates->get_main_templates($data);
  }
}
?>
