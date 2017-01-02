

<?php
if(!function_exists('thumb_create')){
  function thumb_create($file, $page = 0)
  {
    $im = new imagick($file);
    $im->setImageFormat('jpg');
    header('Content-Type: image/jpeg');
    echo $im;
  }
}

?>
