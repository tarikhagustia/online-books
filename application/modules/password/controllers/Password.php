<?php

class Password extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->config('allblue');
        $this->load->library('encrypt');
    }
    public function hash($password = 1234)
    {
      $hash = $this->config->item('vendor_hash');
      $password = $password . $hash;
      return md5($password);
    }
    public function get_key($email = "null")
    {
      $key = $this->encrypt->encode($email);
      $hash = base64_encode($key);
      return $hash;
    }
}
