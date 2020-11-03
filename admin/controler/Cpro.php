<?php
require "../public/include/config.php";
include_once "model/Mpro.php";
if ($_GET['a']) {
    $a = $_GET['a'];
    switch ($a) {
        case "show":
            $class = new pro();
            $res = $class->pro_list3();
            $res2 = $class->pro_list3();
            
            break;
        case 'added':
            $class = new pro();
            $res = $class->pro_list4();
            break;
        case 'add':
            $class = new pro();
            $res = $class->pro_list();
            if (isset($_POST['frm']) && $_FILES['image1']) {
                $data =   $_POST['frm'];
                $file1 = $_FILES['image1'];
                $file2 = $_FILES['image2'];
                $file3 = $_FILES['image3'];
                $dir = "temp_image";
                $response1 = $class->uploder($file1, $dir);
                $response2 = $class->uploder($file2, $dir);
                $response3 =  $class->uploder($file3, $dir);
                if ($response1 & $response2 & $response3) {
                    $list = [$response1, $response2, $response3];
                    $res_add = $class->pro_add($data, $list);
                    header("location:index.php?c=pro&a=added");
                }
            }
            break;
        case 'delete':
            $class = new pro();
            if ($_GET['id']) {
                $delete_id = $_GET['id'];
                $res = $class->pro_delete($delete_id);
            }
            header("location:index.php?c=pro&a=show");
            break;
        case 'edit':
            $class = new pro();
            $res = $class->pro_list();
             $edit_id;
            if (isset($_GET['id'])) {
                $edit_id = $_GET['id'];
                $res_edit_list = $class->pro_editList($edit_id);
                //  var_dump($res_edit_list);
            }
            if (isset($_POST['frm'])) {
                $data =   $_POST['frm'];
                $file1 = $_FILES['image1'];
                $file2 = $_FILES['image2'];
                $file3 = $_FILES['image3'];
                $dir = "temp_image";
                $response1 = $class->uploder($file1, $dir);
                $response2 = $class->uploder($file2, $dir);
                $response3 =  $class->uploder($file3, $dir);
                if ($response1 & $response2 & $response3) {
                    $list = [$response1, $response2, $response3];
                    $javab = $class->pro_edit($data, $list, $edit_id);
                    
                    if ($javab) {
                        unlink("temp_image/". $res_edit_list['image1']);
                        unlink("temp_image/". $res_edit_list['image2']);
                        unlink("temp_image/". $res_edit_list['image3']);
                        header("location:index.php?c=pro&a=show");
                    } else {
                    header("location:index.php?c=pro&a=edit&p=error");
                }
            }
        }
            break;
        default:
            # code...
            break;
    }
}
require "veiw/$controler/$a.php";
