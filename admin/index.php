<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    header("location:veiw/login.php");
}
require "../public/include/config.php";
require "veiw/layout/header.php";
?>
<?php
$controler = @$_GET['c'] ? $_GET['c'] : 'index';
$action = @$_GET['a'] ? $_GET['a'] : 'index';
if (file_exists("controler/C$controler.php")) {
    include_once "controler/C$controler.php";
   
    
}

?>











<?php
require "veiw/layout/footer.php";
?>