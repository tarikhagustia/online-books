<?php
class Admin_dashboard extends AdminController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['content'] = 'admin_dashboard/blank_v';
    $this->templates->get_admin_templates($data);
  }
}
 ?>
