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
    $data = [
      'author_id' => $this->input->post('author_id'),
      'author_name' => $this->input->post('profile_name'),
      'author_email' => $this->input->post('profile_picture'),
      'author_desc' => $this->input->post('profile_desc')
    ];
    $this->db->replace('author' , $data);
    $this->session->set_flashdata('success', 'Berhasil melakukan perubahan');
    redirect('myadmin/author/edit');
  }
}
?>
