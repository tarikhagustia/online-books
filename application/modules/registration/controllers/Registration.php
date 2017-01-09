<?php

(defined('BASEPATH')) or exit('No direct script access allowed');
class Registration extends UserController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
      echo "string";
    }
    public function get_view()
    {
      $this->templates->get_user_register_templates([]);
    }
    public function register()
    {
      // var_dump($_POST);
      $this->form_validation->set_rules('fullname', 'Nama Lengkap' , 'required|trim');
      $this->form_validation->set_rules('email', 'Email' , 'required|trim|valid_email|callback_check_email');
      $this->form_validation->set_rules('password', 'Kata sandi' , 'required');
      $this->form_validation->set_rules('rpassword', 'Konfirmasi Kata sandi' , 'required|matches[password]');
      if($this->form_validation->run($this) == false):
        $this->templates->get_user_register_templates([]);
      else:
        // Daftarkan
        $data = [
          'username' => $this->input->post('email'),
          'password' => modules::run('password/hash', $this->input->post('password')),
          'full_name' => $this->input->post('fullname'),
          'group_id' => 3,
          'key' => modules::run('password/get_key', $this->input->post('email')),
          'email' => $this->input->post('email'),
          'is_active' => false
        ];
        $insert = $this->db->insert('user' , $data);
        // Set avtivation
        $to = $this->input->post('email');
        $subject = "Tinggal selangkah lagi, Aktifkan akun anda";
        $body = $this->load->view('email_v' , $data , true);
        modules::run('email/send' , $to , $subject , $body);
        $this->session->set_flashdata('success' , 'Terimakasih telah melakukan pendaftaran, silahkan cek email anda, kami telah mengirimkan link aktifasi');
        redirect('signin');
      endif;
    }
    public function check_email($email)
    {
      $query = $this->db->select('email')->from('user')
      ->where('user.email' , $email)
      ->get()->result();
      if(count($query) > 0):
        $this->form_validation->set_message('check_email' , 'Maaf email '. $email . ' sudah terdaftar, silahkan gunakan email lain');
        return false;
      else:
        return true;
      endif;
    }
}
