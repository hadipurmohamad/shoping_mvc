<?php

class login{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }
  
    public function users_login($frm){

        $hash_password= md5($frm['password']);
        $resualt = $this->db->query("SELECT * FROM `users` where name='$frm[name]' and password='$hash_password' ");
        $res = $resualt->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

   
}
