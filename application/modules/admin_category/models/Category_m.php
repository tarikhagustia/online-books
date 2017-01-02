<?php
class Category_m extends CI_Model {
  public function get_categories()
  {
    $data = $this->db->get_where('category', []);
    return $data->result();
  }
}
 ?>
