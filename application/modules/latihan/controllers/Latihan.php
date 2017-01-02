<?php
class Latihan extends UserController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $link = './resource/books/nama-buku-kerends.pdf';
    modules::run('images/thumb_create', $link);
  }
}
 ?>
