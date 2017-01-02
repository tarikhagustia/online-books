<?php
class Admin_user extends AdminController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->load->library(['form_validation']);
  }
  public function show()
  {
    $data['content'] = 'admin_user/user_list';
    $data['list'] = $this->user_m->get_user_list();
    $this->templates->get_admin_templates($data);
  }
  public function new_form()
  {
    $data['content'] = 'admin_user/new_v';
    $data['groups'] = $this->user_m->get_groups();
    $this->templates->get_admin_templates($data);
  }
  public function new_save()
  {
    $full_name = $this->input->post('full_name');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $cpassword = $this->input->post('cpassword');
    $group_id = $this->input->post('group_id');
    $is_pay = $this->input->post('is_pay');
    $this->form_validation->set_rules('full_name', 'Nama Lengkap', 'required|trim');
    $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Kata sandi', 'required|trim');
    $this->form_validation->set_rules('cpassword', 'Konfirmasi Katasandi', 'required|trim|matches[password]');
    if($this->form_validation->run($this) == false):
      $this->new_form();
    else:
      var_dump($_POST);
      // Save to database
      $data = [
        'full_name' => $full_name,
        'username' => $email,
        'email' => $email,
        'password' => modules::run('password/hash', $password),
        'group_id' => $group_id,
        'is_pay' => $is_pay,
        'date_create' => date('Y-m-d H:i:s')
      ];
      $this->db->insert('user', $data);
      $this->session->set_flashdata('success', 'Pengguna <strong>'.$full_name.'</strong> sudah ditambahkan');
      redirect('myadmin/user/list');
    endif;
  }
  public function delete($id)
  {
    $this->db->delete('user', array('user_id' => $id));
    $this->session->set_flashdata('success', 'Berhasil Menghapus user');
    redirect('myadmin/user/list');
  }
  public function edit_form($user_id)
  {
    $data['content'] = 'admin_user/edit_v';
    $data['user']  = $this->user_m->get_user_data($user_id);
    $data['groups'] = $this->user_m->get_groups();
    $this->templates->get_admin_templates($data);
  }
  public function edit_save()
  {
    $user_id = $this->input->post('user_id');
    $full_name = $this->input->post('full_name');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $cpassword = $this->input->post('cpassword');
    $group_id = $this->input->post('group_id');
    $is_pay = $this->input->post('is_pay');
    $this->form_validation->set_rules('full_name', 'Nama Lengkap', 'required|trim');
    $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email');
    //
    if ($password != '' && $cpassword != '') {
      $this->form_validation->set_rules('password', 'Kata sandi', 'trim');
      $this->form_validation->set_rules('cpassword', 'Konfirmasi Katasandi', 'trim|matches[password]');

    }
    //
    if($this->form_validation->run($this) == false):
      $this->edit_form($user_id);
    else:
      // Save to database
      $data = [
        'full_name' => $full_name,
        'username' => $email,
        'email' => $email,
        'group_id' => $group_id,
        'is_pay' => $is_pay
      ];
      if ($password != '' && $cpassword != '') {
        $data['password'] = modules::run('password/hash', $password);
      }
      $this->db->where('user_id', $user_id);
      $this->db->update('user' , $data);
      $this->session->set_flashdata('success', 'Perubahan Telah disimpan');
      redirect('myadmin/user/list');
    endif;
  }
}
