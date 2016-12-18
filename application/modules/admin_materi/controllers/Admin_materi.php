<?php
class Admin_materi extends AdminController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('materi_m');
  }
  public function view()
  {
    $data['materis'] = $this->materi_m->get_materi();
    $data['content'] = 'admin_materi/materi_v';
    $this->templates->get_admin_templates($data);
  }
}

 ?>
