<?php

class Password extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->config('allblue');
    }
    public function hash($password = 1234)
    {
      $hash = $this->config->item('vendor_hash');
      $passowrd = $password . $hash;
      return md5($password);
    }
}
