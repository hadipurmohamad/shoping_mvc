<?php
$controler=@$_GET['c']?$_GET['c']:'index';
if (file_exists("controler/C$controler.php")) {
    include_once "controler/C$controler.php";
}
?>