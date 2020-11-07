<?php
class procat{
public function __construct()
{
global $db;
$this->db=$db;
}

public function procat_list(){

$resualt = $this->db->query("SELECT * FROM `menu_list` WHERE chid='0'");
$res = $resualt->fetchall(PDO::FETCH_ASSOC);
return $res;
}
public function procat_list2(){

$resualt = $this->db->query("SELECT * FROM `menu_list`");
$res = $resualt->fetchall(PDO::FETCH_ASSOC);
return $res;
}
public function procat_add($data){

$resualt = $this->db->exec("INSERT INTO `menu_list` ( `chid`, `name`, `tittle`, `status`) 

         VALUES ('$data[id]','$data[name]','$data[name]','1')");
// $res = $resualt->fetchall(PDO::FETCH_ASSOC);
return $resualt;
}
    public function procat_delete($id)
    {

        $resualt = $this->db->exec("DELETE FROM `menu_list` WHERE id=$id ");
    
        return $resualt;
    }
    public function procat_edit($data,$id)
    {

       $resualt= $this->db->exec("UPDATE `menu_list` SET 
       chid='$data[id]',name='$data[name]',tittle='$data[name]',status='1' WHERE id=$id");
    return $resualt;
    
    }
    public function procat_editList($id)
    {

        $resualt = $this->db->query("SELECT * FROM `menu_list` WHERE id=$id ");
        $res = $resualt->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

}
?>