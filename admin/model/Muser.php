<?php

class user extends main
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }
    public function user_add($data)
    {
        $resualt = $this->db->exec("INSERT INTO `users` ( `email`, `password`,`name`) 
         VALUES ('$data[email]',md5('$data[password]'),'$data[name]')");
        return $resualt;
    }
    public function user_search($data)
    {
        $pass=md5($data['password']);
        $resualt = $this->db->query("SELECT * FROM `users` WHERE name ='$data[name]' and password = '$pass'");
        $res = $resualt->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
}