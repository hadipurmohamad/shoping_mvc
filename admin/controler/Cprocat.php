<?php
require "../public/include/config.php";
require 'model/Mprocat.php';



    $class = new procat();
    $res = $class->procat_list();


require "veiw/procat/procat.php";