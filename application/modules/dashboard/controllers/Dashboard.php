<?php

class Dashboard extends UserDashboard
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->templates->get_main_templates([]);
  }
}


 ?>
