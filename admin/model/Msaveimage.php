<?php
class image{
public function __construct()
{
global $db;
$this->db=$db;
}

public function image_list(){

$resualt = $this->db->query("SELECT * FROM `images`");
$res = $resualt->fetchall(PDO::FETCH_ASSOC);
return $res;
}
public function image_add($data){

        $resualt = $this->db->query("INSERT INTO `images`(`name`, `URL`) VALUES ('$data[name]','$data[image]')");
 
return $resualt;
}


}
