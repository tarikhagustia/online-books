<?php
class Home extends UserController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['page_title'] = 'Selamat Datang';
    $data['content'] = 'home/home_v';
    $this->templates->get_main_templates($data);
  }
}
 ?>
