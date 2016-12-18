<?php
class Materi_m extends CI_Model
{
  public function __construct()
  {
    parent::__construct();

  }
  public function get_materi()
  {
    $this->db->select('book_id, book_name, book_sheet, book.created_at')
    ->from('book')
    ->join('category', 'book.category_id = category.category_id')
    ->order_by('book.created_at', 'DESC');
    $get = $this->db->get()->result();
    return $get;
  }
}
 ?>
