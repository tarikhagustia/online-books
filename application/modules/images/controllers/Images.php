<?php
class Images extends UserController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function thumb_create($link = null , $page = 0)
  {

    $link = base64_decode($this->input->get('image'));
    $link = $link . '[' . $page . ']';
    $imagick = new \Imagick($link);
    $imagick->resizeImage(250, 350, \Imagick::FILTER_LANCZOS, 1, false);
    $imagick->setImageFormat('png');
    $this->output
        ->set_content_type('png')
        ->set_output($imagick->getImageBlob());
  }
  public function test()
  {
    modules::run('images/thumb_create');
  }
  public function gravatar($email)
  {
    // $email = $this->input->get('email');
    $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . '?d=monsterid';
    return $grav_url;
  }
}
 ?>
