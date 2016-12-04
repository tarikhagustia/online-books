<?php
class Auth extends AdminController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('auth_m');
  }
  public function login()
  {
    $this->templates->get_admin_login_templates([]);
  }
  public function login_do()
  {
    $this->form_validation->set_rules('username' , 'Username' , 'required|trim',
      ['required' => 'Kolom {field} tidak boleh kosong, silahkan isi']
    );
    $this->form_validation->set_rules('password' , 'Password' , 'required|callback_check_login');
    if($this->form_validation->run($this) == false):
      $this->templates->get_admin_login_templates([]);
    else:

    endif;
  }
  public function check_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    if($this->auth_m->check_login_admin($username, $password) == true):
      return true;
    else:
      $this->form_validation->set_message('check_login' , $this->auth_m->display_error());
      return false;
    endif;
  }
}
 ?>
