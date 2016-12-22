<?php
class Perpustakaan_m extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  public function get_library()
  {
    $this->db->select('is_free, book_name, book_url, category_name, library.created_at')->from('library')
    ->join('book', 'book.book_id = library.book_id')
    ->join('category', 'category.category_id = book.category_id')
    ->join('user', 'user.user_id = library.user_id')
    ->where('user.user_id' , $this->session->user_id)
    ->order_by('library.created_at', 'DESC');
    $get = $this->db->get();
    return $get->result();
  }
}
 ?>
