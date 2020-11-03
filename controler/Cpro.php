<?php
require "public/include/config.php";
include_once "admin/model/Mpro.php";
// if ($_GET['a']) {
//     $a = $_GET['a'];
//     switch ($a) {
//         case "show":
            $class = new pro();
            $res = $class->pro_list();
            $res2 = $class->pro_list2();

            // break;
        // case 'add':
            // $class = new pro();
            // $res = $class->pro_list();
            // if (isset($_POST['frm'])) {
            //     $data =   $_POST['frm'];
            //     $res_add = $class->pro_add($data);
            // }

            // break;
        // case 'delete':
            // $class = new pro();
            // if ($_GET['id']) {
            //     $delete_id = $_GET['id'];
            //     $res = $class->pro_delete($delete_id);
            // }
            // header("location:index.php?c=pro&a=show");
            // break;
        // case 'edit':
            // $class = new pro();
            // $res = $class->pro_list();
            // if ($_GET['id']) {
            //     $edit_id = $_GET['id'];
            //     $res_edit_list = $class->pro_editList($edit_id);
            // }
            // if (isset($_POST['form'])) {
            //     $data =   $_POST['form'];

            //     $javab = $class->pro_edit($data, $edit_id);
            //     if ($javab) {
            //         header("location:index.php?c=pro&a=show");
            //     } else {
            //         header("location:index.php?c=pro&a=edit&p=error");
            //     }
            // }
            // break;
        // default:
            # code...
            // break;
    // }
// }
// require "veiw/$controler/$a.php";
