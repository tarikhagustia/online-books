<?php
class Book_m extends CI_Model
{
  public function get_book_data($book_url)
  {
    $this->db->select('book_source, book.book_id, is_free, library.library_id, book_source, book_name, book_url, book_images, category_name, book_description, book.created_at')->from('book')
    ->join('category' , 'book.category_id = category.category_id');
    if ($this->session->login) {
      $this->db->join('library', 'library.book_id = book.book_id', 'left');
      $this->db->join('user', 'library.user_id = user.user_id', 'left');
      // $this->db->where('user.user_id', $this->session->user_id);
    }
    $this->db->where('book.book_url', $book_url);
    $get = $this->db->get()->row();
    return $get;
  }
  public function get_last_reader($book_url)
  {
    $this->db->select('full_name, reader.created_at')->from('reader')
    ->join('user', 'reader.user_id = user.user_id')
    ->join('book', 'reader.book_id = book.book_id')
    ->where('book.book_url', $book_url)
    ->order_by('reader.created_at' , 'DESC');
    $get = $this->db->get()->result();
    return $get;
  }
}
 ?>
