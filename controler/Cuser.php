<?php
include_once "admin/model/Muser.php";
if ($_GET['a']) {
    $a = $_GET['a'];
    switch ($a) {
        case "login":
            $user = new user();
            if (isset($_POST['frm'])) {
                $userData = $_POST['frm'];
                $userLogin = $user->user_search($userData);
                if ($userLogin) {
                    $_SESSION['user_name'] = $userData['name'];
                    $_SESSION['user_id'] = $userLogin['id'];
                    header("location:index.php");
                }else {
                    header("location:index.php?c=user&a=login&p=error");
                }
            }
            break;
        case "register":
            $user = new user();
            if (isset($_POST['frm'])) {
                $userData = $_POST['frm'];

                $userRegister = $user->user_add($userData);
                if ($userRegister) {
                    $_SESSION['user_name'] = $userData['name'];
                    $_SESSION['user_email'] = $userData['email'];
                    header("location:index.php?c=user&a=login");
                }
            }
            break;
        case "logout":
            $user = new pro();
            if (isset($_GET['procat_id'])) {
                $procatId = $_GET['procat_id'];
                $menuList = $user->pro_list4();
                $procatGroup = $user->pro_listBycat_id2($procatId);
            }
            break;
    }
}

require "veiw/$controler/$a.php";
