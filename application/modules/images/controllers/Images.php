<?php
class Images extends UserController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function thumb_create($link = null , $page = 0)
  {
    $link = base64_decode($link);
    $link = $link . '[' . $page . ']';
    $im = new imagick($link);
    $im->setImageFormat('jpg');
    $this->output
        ->set_content_type('jpeg')
        ->set_output($im);
  }
  public function test()
  {
    modules::run('images/thumb_create');
  }
}
 ?>
