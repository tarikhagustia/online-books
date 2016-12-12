<?php
class Category extends UserController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('category_m');
  }
  public function view_category($category_url)
  {
    $category_name = $this->category_m->get_category_name($category_url);
    if($category_name == null)
    {
      show_404();
    }
    $data['page_title'] = $category_name->category_name;
    $data['content'] = 'category/category_v';
    $data['book_data'] = $this->category_m->get_book_data($category_url);

    $this->templates->get_main_templates($data);
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
