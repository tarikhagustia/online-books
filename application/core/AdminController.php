<?php
class AdminController extends MX_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->module('templates');
    if($this->session->group_id == 3 || $this->session->login != true):
      $this->session->set_flashdata('flashSuccess', 'Anda Tidak diperkenankan mengakses Halaman ini');
      redirect('myadmin/signin');
    endif;
  }
}

 ?>
