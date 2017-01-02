<?php
class User_m extends CI_Model
{
  public function get_user_list()
  {
    $this->db->select('*')->from('user')
    ->join('group', 'user.group_id = group.group_id');
    $get = $this->db->get();
    return $get->result();
  }
  public function get_groups()
  {
    $data = $this->db->get('group');
    // var_dump($data->result());
    return $data->result();
  }
  public function get_user_data($user_id)
  {
    $this->db->select('*')->from('user')
    ->join('group', 'user.group_id = group.group_id')
    ->where('user_id', $user_id);
    $get = $this->db->get();
    return $get->row();
  }
}
 ?>
