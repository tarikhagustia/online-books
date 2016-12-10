<?php
class Alert extends UserController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function show()
  {
    $this->load->view('alert_v');
  }
  public function validation()
  {
    $this->load->view('validation');
  }
}
?>
