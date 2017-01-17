<?php

class Dashboard extends UserController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('dashboard_m');
  }
  public function index()
  {
    // $data['page_title'] = 'Your dashboard';
    // $data['content'] = 'dashboard/home_book_v';
    // $data['books'] = $this->dashboard_m->get_data($this->session->user_id);
    // $data['dibaca'] = $this->dashboard_m->get_data_dibaca($this->session->user_id);
    // $this->templates->get_main_templates($data);
  }
  public function userDashboard()
  {
    // die();
    add_js(base_url('assets/vendors/owl-carousel/dist/owl.carousel.min.js'));
    add_js(base_url('assets/js/dashboard.js'));
    $data['author'] = $this->dashboard_m->get_author();
    $data['page_title'] = 'Selamat datang di Baca Online';
    $data['meta']['title'] = $data['page_title'];
    $data['content'] = 'dashboard/home_book_v';
    $data['book_data'] = $this->dashboard_m->get_books();

    $this->templates->get_main_templates($data);
  }
}


 ?>
