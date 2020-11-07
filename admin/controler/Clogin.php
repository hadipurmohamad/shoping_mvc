<?php
require "../../public/include/config.php";
require '../model/mlogin.php';
session_start();
if (isset($_POST['frm'])) {
$form_login=$_POST['frm'];
$class = new login();
$res = $class->users_login($form_login);
if ($res['password']==md5($form_login['password'])) {
    $_SESSION['admin_login']= $form_login['name'];
    $_SESSION['admin_login_password']= $form_login['password'];
    header("Location:../index.php?c=index");

}else {
        header("location:../veiw/login.php?p=error");
    }
}else {
    header("location:../veiw/login.php?p=notvalid");
    
}
