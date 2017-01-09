<?php
class Admin_author extends AdminController {
  public function __construct()
  {
    parent::__construct();
  }
  public function edit_profile()
  {
    $sql = $this->db->get('author');
    $data['author'] = $sql->row();
    $data['content'] = 'admin_author/edit_v';
    $this->templates->get_admin_templates($data);
  }
  public function edit_save()
  {

  $config['upload_path']          = 'assets/images/author/';
  $config['allowed_types']        = 'gif|jpg|png';
  $config['max_size']             = 1000;
  // $config['max_height']           = 768;
  // $config['max_width']            = 1024;

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload('profile'))
  {
    $this->session->set_flashdata('success', $this->upload->display_errors());
    redirect('myadmin/author/edit');
  }
  else
  {
    $data_upload = $this->upload->data();
    $img_dir = $config['upload_path'] . $data_upload['file_name'];
    // file_name
    $data = [
      'author_id' => $this->input->post('author_id'),
      'author_name' => $this->input->post('profile_name'),
      'author_desc' => $this->input->post('profile_desc'),
      'author_img' => $img_dir
    ];
    $this->db->replace('author' , $data);
    $this->session->set_flashdata('success', 'Berhasil melakukan perubahan');
    redirect('myadmin/author/edit');
  }
  }
}
?>
