<?php
require "../public/include/config.php";
include_once "model/Mbascket.php";
if ($_GET['a']) {
    $a = $_GET['a'];
    switch ($a) {
            case "delete":
            if($_GET['delete_id']){
                $delete_id=$_GET['delete_id'];
                $bascket = new bascket();
                $resDelete=$bascket->bascket_cart_delete($delete_id);
                if ($resDelete) {
                  header("location:index.php?c=bascket&a=dontpay");
                }
            }

    
        break;   
                case "pay":

                $bascket = new bascket();
                $bascketList=$bascket->bascket_cart_pay();
        
        break;    
                case "dontpay":
     

                $bascket = new bascket();
                $bascketList=$bascket->bascket_cart_dontpay();     
            
        break;    
    }
}
require "veiw/$controler/$a.php";
