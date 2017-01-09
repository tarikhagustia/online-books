<?php
class Activation extends UserController
{
  public function __constuct()
  {
    parent::__constuct();
  }
  public function aktifkan()
  {
    $key = $this->input->get('key');
    $data = $this->db->get_where('user' , ['key' => $key])->result();
    if (count($data) > 0) {
      $data = [
        'is_active' => true
      ];
      $this->db->where('key' , $key);
      $sql = $this->db->update('user' , $data);
      if ($sql) {
        $this->session->set_flashdata('success', 'Berhasil mengaktifkan akun anda, Silahkan login ');
        redirect('signin');
      }else{
        $this->session->set_flashdata('success', 'Gagal mengaktikan akun anda, Hubungi admin');
        redirect('signin');
      }
    }else{
      show_404();
    }
  }
}
