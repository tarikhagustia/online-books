<?php
class Category extends UserController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function get_category()
  {
    $this->db->select('category_id, category_name, category_url')->from('category')
    ->where('is_active', true)
    ->order_by('category_name' , 'ASC');
    $get = $this->db->get();
    return $get->result();
  }
}
?>
