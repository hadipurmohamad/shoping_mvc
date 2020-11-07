<?php
require "public/include/config.php";
include_once "admin/model/Mbascket.php";
if ($_GET['a']) {
    $a = $_GET['a'];
    switch ($a) {
        case "add":
            if ($_SESSION['user_id']) {
                $user_id= $_SESSION['user_id'];
                $bascket=new bascket();
                if ($_GET['add_id']) {
                    $product_id= $_GET['add_id'];
                  $resAdd =  $bascket->bascket_cart_add($user_id, $product_id);
                    if($resAdd) {
                        header("location:index.php?c=bascket&a=list");
                    }
                }else{
                    return;
                }
                
            }else{
                header("location:index.php?c=user&a=login");
            }
            
        break;    
        case "list":
            if (isset($_SESSION['user_id'])) 
            {
                $user_id= $_SESSION['user_id'];
                $bascket = new bascket();
                $bascketList=$bascket->bascket_cart_search($user_id);
                
                
            }
        break;    
        case "delete":
            if($_GET['delete_id']){
                $delete_id=$_GET['delete_id'];
                $bascket = new bascket();
                $resDelete=$bascket->bascket_cart_delete($delete_id);
                if ($resDelete) {
                  header("location:index.php?c=bascket&a=list");
                }
            }

    
        break;    
        
        }
}
require "veiw/$controler/$a.php";