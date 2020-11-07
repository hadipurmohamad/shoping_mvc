<?php
include_once "../model/Msaveimage.php";
include_once "../../public/include/config.php";
if ($_POST['name']&& $_POST['image']) {
    $data=array(
        'name'=> $_POST['name'],
        'image'=> $_POST['image']
    );
    $class= new image();
  $res=  $class->image_add($data);
    
}

?>