<?php
class Book extends UserDashboard
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('book_m');
    $this->load->library('format');
    $this->load->helper('date');
  }
  public function view($book_url)
  {
    $data['page_title'] = 'Buku';
    $data['content'] = 'book/book_v';
    $data['reader'] = $this->book_m->get_last_reader($book_url);
    $data['book_data'] = $this->book_m->get_book_data($book_url);
    $this->templates->get_main_templates($data);
  }
}
