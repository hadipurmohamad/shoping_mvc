<?php
include_once "model/Msaveimage.php";
// include_once "../../public/include/config.php";

    $class= new image();
  $resualt=  $class->image_list();

include_once "veiw/show/show.php";