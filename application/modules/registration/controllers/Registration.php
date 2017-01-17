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
        $this->session->set_flashdata('success' , 'Terimakasih telah melakukan pendaftaran, silahkan cek Folder Email masuk atau spam pada email anda, kami telah mengirimkan link aktifasi.');
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
    public function forget_password()
    {
      $this->templates->get_user_forget_templates([]);
    }
    public function forget_password_post()
    {
      $email = $this->input->post('email');
      $this->form_validation->set_rules('email' , 'E-mail' , 'required|trim|valid_email|callback_check_email_forget');
      if($this->form_validation->run($this) == false){
        $this->forget_password();
      }else{
        $data = $this->db->get_where('user' , ['email' => $email]);
        $data = $data->row();
        // send($email, $subject , $body)
        $subject = "Permohonan perubahan kata sandi";
        $body = $this->load->view('email_forget_v', $data , true);
        $email = $data->email;
        $this->session->set_userdata(['password_reset' => $data->key]);
        modules::run('email/send' , $email, $subject, $body);
        $this->session->set_flashdata('success' , 'Terimakasih telah melakukan Permohonan perubahan kata sandi, Selanjutnya silahkan cek Folder Email masuk atau spam pada email anda, kami telah mengirimkan link Perubahan Katasandi anda.');
        redirect('signin');
      }
    }
    public function check_email_forget($email)
    {
      $query = $this->db->select('email')->from('user')
      ->where('user.email' , $email)
      ->get()->result();
      if(count($query) > 0):
        return true;
      else:
        $this->form_validation->set_message('check_email_forget' , 'Maaf email '. $email . ' tidak terdaftar pada Sistem kami, silahkan <a href="'.base_url('signup').'">Daftar</a> untuk membuat akun baru');
        return false;
      endif;
    }
    public function forget_password_view($key = null)
    {
      $key = ($key == null) ? $this->input->get('key') : $key;
      $user_data = $this->db->get_where('user', ['key' => $key]);
      $data['user'] = $user_data->row();
      if ($data['user'] == NULL || empty($data['user']) || $key == null) {
        show_404();
      }
      $data['meta']['title'] = 'Rubah Katasandi';
      $this->templates->get_user_forget2_templates($data);
    }
    public function forget_password_save()
    {
      $key = $this->input->post('key');
      $oldPassword = $this->input->post('oldPassword');
      $newPassword = $this->input->post('newPassword');
      $confirmNewPassword = $this->input->post('confirmNewPassword');
      // $this->form_validation->set_rules('oldPassword', 'Kata sandi lama', 'required|callback_check_old_password');
      $this->form_validation->set_rules('newPassword', 'Kata sandi Baru', 'required');
      $this->form_validation->set_rules('confirmNewPassword', 'Konfirmasi Kata sandi Baru', 'required|matches[newPassword]');
      if($this->form_validation->run($this) == false){
        $this->forget_password_view($key);
      }else{
        if ($this->session->userdata('password_reset') != null) {
          $data = [
            
            'password' => modules::run('password/hash', $newPassword)
          ];
          $this->db->where('key' , $key);
          $this->db->update('user', $data);
          $this->session->set_flashdata('success', 'Berhasil merubah kata sandi anda, silahkan Log-in');
          redirect('signin');
        }else{
          $this->session->set_flashdata('success', 'Gagal Merubah kata sandi, Validasi token Gagal atau Link expire');
          redirect('signin');
        }

      }
    }
    public function check_old_password($oldPassword)
    {
      $passwordHash = modules::run('password/hash', $oldPassword);
      $key = $this->input->post('key');
      $data = $this->db->get_where('user', ['key' => $key, 'password' => $passwordHash]);
      if ($data->num_rows() > 0) {
        return true;
      }else{
        $this->form_validation->set_message('check_old_password', '{field} tidak sama');
        return false;
      }
    }
}
