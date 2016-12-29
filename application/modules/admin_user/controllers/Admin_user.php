<?php
class Admin_user extends AdminController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function list()
  {
    $data['content'] = 'admin_user/user_list';
    $this->templates->get_admin_templates($data);
  }
}
