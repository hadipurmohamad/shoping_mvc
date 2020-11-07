<?php
include_once "admin/model/Mindex.php";
include_once "admin/model/Mpro.php";
$product= new pro();
$productlist=$product->pro_listBycat_id2(41);
$productAlllist=$product->pro_list3();
include_once "veiw/index/index.php";