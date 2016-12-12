<?php

class Dashboard extends UserDashboard
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('dashboard_m');
  }
  public function index()
  {
    $data['page_title'] = 'Your dashboard';
    $data['content'] = 'dashboard/home_v';
    $data['books'] = $this->dashboard_m->get_data($this->session->user_id);
    $data['dibaca'] = $this->dashboard_m->get_data_dibaca($this->session->user_id);
    $this->templates->get_main_templates($data);
  }
}


 ?>
