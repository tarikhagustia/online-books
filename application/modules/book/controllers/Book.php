<?php
class Book extends UserDashboard
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('book_m');
    $this->load->library('format');
  }
  public function view($book_url)
  {
    $data['page_title'] = 'Buku';
    $data['content'] = 'book/book_v';
    $data['book_data'] = $this->book_m->get_book_data($book_url);
    $this->templates->get_main_templates($data);
    // $this->load->view('book_v');
  }
}
