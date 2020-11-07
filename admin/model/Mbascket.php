<?php

class pro extends main
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
    public function pro_listBycat_id($cat_id, $id)
    {
        $this->db->exec("SET CHARACTER SET UTF8");
        $resualt = $this->db->query("SELECT * FROM `product` WHERE cat_id =$cat_id and id!=$id");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
    public function pro_listBycat_id2($cat_id)
    {
        $this->db->exec("SET CHARACTER SET UTF8");
        $resualt = $this->db->query("SELECT * FROM `product` WHERE cat_id =$cat_id ");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
    public function pro_list()
    {

        $resualt = $this->db->query("SELECT * FROM `menu_list` WHERE chid ='0'");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
    public function pro_list1($id)
    {
        $this->db->exec("SET CHARACTER SET UTF8");
        $resualt = $this->db->query("SELECT * FROM `product` WHERE id =$id");
        $res = $resualt->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
        //------------------------------
    public function pro_list2()
    {

        $resualt = $this->db->query("SELECT * FROM `menu_list` ");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
        //------------------------------
    public function pro_list3()
    {
        $this->db->exec("SET CHARACTER SET utf8");
        $resualt = $this->db->query("SELECT * FROM `product` ");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
        //------------------------------
    public function pro_list4()
    {

        $resualt = $this->db->query("SELECT * FROM `menu_list` WHERE chid !='0'");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
    //------------------------------
    //------------------------------
    public function pro_delete($id)
    {
        $resualt = $this->db->exec("DELETE FROM `product` WHERE id=$id ");
        return $resualt;
    }
        //------------------------------
    public function pro_edit($data, $image, $id)
    {
        $this->db->exec("SET CHARACTER SET utf8");
        $resualt = $this->db->exec("UPDATE `product` SET 
       tittle='$data[name]',image1='$image[0]',image2='$image[1]'
       ,image1='$image[2]',cat_id='$data[cat_id]',price='$data[price]'
       ,count='$data[count]',detials='$data[detials]' WHERE id=$id");
        return $resualt;
    }
    //------------------------------
    public function pro_editList($id)
    {
        $this->db->exec("set character set utf8");
        $resualt = $this->db->query("SELECT * FROM `product` WHERE id=$id ");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
}
