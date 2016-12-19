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
  public function get_materi_edit($book_id)
  {
    $this->db->select('book_id, book_name, book_sheet, book_description, book.created_at, is_free, category.category_id')
    ->from('book')
    ->join('category', 'book.category_id = category.category_id')
    ->where('book_id', $book_id)
    ->order_by('book.created_at', 'DESC');
    $get = $this->db->get()->row();
    return $get;
  }
}
 ?>
