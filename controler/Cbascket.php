<?php
require "public/include/config.php";
include_once "admin/model/Mpro.php";
if ($_GET['a']) {
    $a = $_GET['a'];
    switch ($a) {
        case "add":
         $product=new pro();
         if (isset($_GET['procat_id'])) {
             $procatId= $_GET['procat_id'];
            $procatDetial= $product->pro_list1($procatId);
            $procatGroup= $product->pro_listBycat_id($procatDetial['cat_id'],$procatDetial['id']);
         }
        break;    
        case "list":
         $product=new pro();
         if (isset($_GET['procat_id'])) {
             $procatId= $_GET['procat_id'];
             $menuList=$product->pro_list4();
            $procatGroup= $product->pro_listBycat_id2($procatId);
         }
        break;    
        case "shoping-cart":
         $product=new pro();
         if (isset($_GET['procat_id'])) {
             $procatId= $_GET['procat_id'];
             $menuList=$product->pro_list4();
            $procatGroup= $product->pro_listBycat_id2($procatId);
         }
        break;    
        }
        }
    
require "veiw/$controler/$a.php";