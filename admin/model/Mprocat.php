<?php
class procat{
public function __construct()
{
global $db;
$this->db=$db;
}

public function procat_list(){

$resualt = $this->db->query("SELECT * FROM `menu_list`  ");
$res = $resualt->fetchall(PDO::FETCH_ASSOC);
return $res;
}


}
?>