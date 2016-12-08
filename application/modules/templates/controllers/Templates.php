<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Templates extends TemplatesController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {

  }
  public function get_main_templates()
  {
    $this->load->view('user_main_v');
  }
  public function get_admin_templates($data)
  {
    $this->load->view('admin_v', $data);
  }
  public function get_admin_login_templates($data)
  {
    $this->load->view('admin_login_v', $data);
  }
  public function get_user_login_templates($data)
  {
    $this->load->view('user_login_v', $data);
  }
  public function get_user_register_templates($data)
  {
    $this->load->view('user_register_v', $data);
  }
}