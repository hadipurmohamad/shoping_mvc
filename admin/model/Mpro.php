<?php

class pro extends main {
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function pro_list()
    {

        $resualt = $this->db->query("SELECT * FROM `menu_list` WHERE chid ='0'");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
    public function pro_list2()
    {

        $resualt = $this->db->query("SELECT * FROM `menu_list` ");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
    public function pro_list3()
    {
        $this->db->exec("SET CHARACTER SET utf8");
        $resualt = $this->db->query("SELECT * FROM `product` ");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
    public function pro_list4()
    {

        $resualt = $this->db->query("SELECT * FROM `menu_list` WHERE chid !='0'");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function pro_add($data, $image)
    {
        $this->db->exec("SET CHARACTER SET utf8");

        $resualt = $this->db->exec("INSERT INTO `product` ( `tittle`, `image1`,`image2`,`image3`,`cat_id`, `price`, `count`,`detials`) 

         VALUES ('$data[name]','$image[0]','$image[1]','$image[2]','$data[cat_id]','$data[price]','$data[count]','$data[detials]')");

        return $resualt;
    }
    public function pro_delete($id)
    {

        $resualt = $this->db->exec("DELETE FROM `product` WHERE id=$id ");

        return $resualt;
    }
    public function pro_edit($data, $image, $id)
    {
        $this->db->exec("SET CHARACTER SET utf8");
        $resualt = $this->db->exec("UPDATE `product` SET 
       tittle='$data[name]',image1='$image[0]',image2='$image[1]'
       ,image1='$image[2]',cat_id='$data[cat_id]',price='$data[price]'
       ,count='$data[count]',detials='$data[detials]' WHERE id=$id");
        return $resualt;
    }
    public function pro_editList($id)
    {
        $this->db->exec("set character set utf8");
        $resualt = $this->db->query("SELECT * FROM `product` WHERE id=$id ");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
}
