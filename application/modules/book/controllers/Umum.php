<?php
class Umum extends UserController
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
}
