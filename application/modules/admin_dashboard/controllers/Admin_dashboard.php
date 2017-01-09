<?php
class Admin_dashboard extends AdminController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('dashboard_m');
  }
  public function index()
  {
    $users = $this->dashboard_m->get_users();
    $data['s_users'] = $users;
    $downloads = $this->dashboard_m->get_downloads();
    $data['s_download'] = $downloads;
    $readers = $this->dashboard_m->get_readers();
    $data['s_reader'] = $readers;
    $materis = $this->dashboard_m->get_materis();
    $data['s_materis'] = $materis;
    $data['content'] = 'admin_dashboard/blank_v';
    $this->templates->get_admin_templates($data);
  }
}
 ?>
