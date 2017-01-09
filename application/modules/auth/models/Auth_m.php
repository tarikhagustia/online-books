<?php
class Auth_m extends CI_Model
{
  public $error_msg;
  public function display_error()
  {
    return $this->error_msg;
  }
  public function check_login_admin($username, $password)
  {
    $this->db->select('username, password')->from('user')
    ->where('username', $username)->where('password', modules::run('password/hash', $password));
    $get = $this->db->get();
    if(count($get->result()) > 0):
      if($this->check_active($username) == "0"):
        $this->error_msg = "Username " . $username ." belum aktif, silahkan Aktifasi akun anda";
        return false;
      endif;
      return true;
    else:
      $this->error_msg = "Kombinasi username dan katasandi tidak cocok";
      return false;
    endif;
  }
  private function check_active($username)
  {
    $query = $this->db->select('is_active')->from('user')
    ->where('username' , $username)
    ->where('is_active' , FALSE)
    ->get();
    $data = $query->result();
    foreach ($data as $key => $value) {
      return $value->is_active;
    }

  }
}
 ?>
