<?php

(defined('BASEPATH')) or exit('No direct script access allowed');
class UserDashboard extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->module('templates');
        if(!$this->session->userdata('login')):
          $this->session->set_flashdata('success', 'Anda harus login terlebih dahulu');
          redirect('signin');
        endif;
    }
}
