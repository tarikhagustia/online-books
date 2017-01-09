<?php
class Dashboard_m extends CI_Model
{
  public function get_users()
  {
    $data = $this->db->get('user');
    return $data->num_rows();
  }
  public function get_downloads()
  {
    $data = $this->db->get('download');
    return $data->num_rows();
  }
  public function get_readers()
  {
    $data = $this->db->get('reader');
    return $data->num_rows();
  }
  public function get_materis()
  {
    $data = $this->db->get('book');
    return $data->num_rows();
  }
}
