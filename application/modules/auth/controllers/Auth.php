<?php
class Auth extends UserController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('auth_m');
  }
  public function get_view_user()
  {
    $this->templates->get_user_login_templates([]);
  }
  public function login_do_user()
  {
    $username = $this->input->post('username');
    $this->form_validation->set_rules('username' , 'Username' , 'required|trim',
      ['required' => 'Kolom {field} tidak boleh kosong, silahkan isi']
    );
    $this->form_validation->set_rules('password' , 'Password' , 'required|callback_check_login');
    if($this->form_validation->run($this) == false):
      $this->templates->get_user_login_templates([]);
    else:
      $this->set_sessions($username);
      redirect('dashboard');
    endif;
  }
  public function login()
  {
    $this->templates->get_admin_login_templates([]);
  }
  public function login_do()
  {
    $username = $this->input->post('username');
    $this->form_validation->set_rules('username' , 'Username' , 'required|trim',
      ['required' => 'Kolom {field} tidak boleh kosong, silahkan isi']
    );
    $this->form_validation->set_rules('password' , 'Password' , 'required|callback_check_login');
    if($this->form_validation->run($this) == false):
      $this->templates->get_admin_login_templates([]);
    else:
      $this->set_sessions($username);
      redirect('myadmin');
    endif;
  }
  public function set_sessions($username)
  {
    $this->db->select('user_id, is_pay, full_name, email, group_id')
    ->from('user')
    ->where('username' , $username);
    $get = $this->db->get();
    $data = $get->result_array();
    foreach ($data as $key => $value) {
      $this->session->set_userdata($value);
    }
    $this->session->set_userdata('login', true);
    return true;
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
  public function logout()
  {
    $this->session->sess_destroy();
    redirect('dashboard');
  }
}
 ?>
