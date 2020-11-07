<?php

class bascket extends main
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
        $this->db->exec("SET CHARACTER SET utf8");
    }
    public function bascket_cart_add($user_id, $product_id)
    {
        $resualt = $this->db->exec("INSERT INTO `bascket_cart` ( `user_id`, `product_id`,`status`) 
         VALUES ('$user_id','$product_id', 0)");
        return $resualt;
    }
    public function bascket_cart_search($user_id)
    {
        $this->db->exec("SET CHARACTER SET UTF8");
        $resualt = $this->db->query("SELECT * FROM `product`, `bascket_cart` WHERE bascket_cart.product_id=product.id AND user_id =$user_id ");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
    public function bascket_cart_delete($id,$user_id)
    {
        $resualt = $this->db->exec("DELETE FROM `bascket_cart` WHERE id=$id");
        return $resualt;
    }
    public function bascket_cart_pay()
    {

        $resualt = $this->db->query("SELECT * FROM `bascket_cart` WHERE status=1");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
    public function bascket_cart_dontpay()
    {

        $resualt = $this->db->query("SELECT * FROM `bascket_cart` WHERE status=0");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
    //=*************************************************
  