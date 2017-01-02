<?php
class Category_m extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  public function get_book_data($category_url)
  {
    $this->db->select('book_source, book_name, book_images, book_url, book_id, category.category_id, category_name')
    ->from('book')
    ->join('category', 'book.category_id = category.category_id')
    ->where('category_url', $category_url);
    $get = $this->db->get()->result();
    return $get;
  }
  public function get_category_name($category_url)
  {
    $this->db->select('category_name')->from('category')
    ->where('category_url', $category_url);
    $get = $this->db->get()->row();
    return $get;
  }
}
?>
