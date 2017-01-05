<?php
class Dashboard_m extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  public function get_data($user_id)
  {
    $this->db->select('book_id')
    ->from('book')
    ->where('user_id' , $user_id);
    $get = $this->db->get()->result();
    return count($get);
  }
  public function get_data_dibaca($user_id)
  {
    $this->db->select('user_id')
    ->from('reader')
    ->where('user_id');
    $get = $this->db->get()->result();
    return count($get);
  }
  public function get_books()
  {
    $this->db->select('*')->from('book')
    ->join('category', 'category.category_id = book.category_id');
    $data = $this->db->get();
    return $data->result();
  }
}
 ?>
