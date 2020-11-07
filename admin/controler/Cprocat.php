<?php
require "../public/include/config.php";
require 'model/Mprocat.php';
if ($_GET['a']) {
    $a= $_GET['a'];
switch ($a) {
    case "show":
        $class = new procat();
        $res = $class->procat_list2();
     
        break;
    case 'add':
            $class = new procat();
            $res = $class->procat_list();
            if (isset($_POST['frm'])) {
                $data =   $_POST['frm'];
                $res_add = $class->procat_add($data);           
            }   
  
        break;
    case 'delete':
        $class = new procat();
        if ($_GET['id']) {
            $delete_id= $_GET['id'];
            $res = $class->procat_delete($delete_id);
            
        }
        header("location:index.php?c=procat&a=show");
        break;
    case 'edit':
        $class = new procat();
        $res = $class->procat_list();
            if ($_GET['id']) {
                $edit_id = $_GET['id'];
                $res_edit_list = $class->procat_editList($edit_id);
            }
            if (isset($_POST['form'])) {
                $data =   $_POST['form'];
             
               $javab= $class->procat_edit($data, $edit_id);
            if ($javab) {
                    header("location:index.php?c=procat&a=show");
            } else {
                    header("location:index.php?c=procat&a=edit&p=error");
            }
            
            }
        break;
    default:
        # code...
        break;
}

}
require "veiw/$controler/$a.php";