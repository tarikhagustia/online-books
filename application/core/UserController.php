<?php

(defined('BASEPATH')) or exit('No direct script access allowed');
class UserController extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('seo_helper');
        $this->load->module('templates');
    }
}
