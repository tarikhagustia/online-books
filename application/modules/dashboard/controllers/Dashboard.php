<?php

class Dashboard extends UserDashboard
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['page_title'] = 'Your dashboard';
    $data['content'] = 'dashboard/home_v';
    $this->templates->get_main_templates($data);
  }
}


 ?>
