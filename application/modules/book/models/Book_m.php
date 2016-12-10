<?php
class Book_m extends CI_Model
{
  public function get_book_data($book_url)
  {
    $this->db->select('book_name, book_url, book_images, category_name, book_description, book.created_at')->from('book')
    ->join('category' , 'book.category_id = category.category_id')
    ->where('book.book_url', $book_url);
    $get = $this->db->get()->row();

    return $get;
  }
}
 ?>
