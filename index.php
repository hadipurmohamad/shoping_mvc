<?php
require "public/include/config.php";
require_once "admin/model/Mindex.php";
require "controler/Cpro.php";
require "veiw/layout/header.php";
?>
<?php
$controler =@$_GET['c'] ? $_GET['c'] : 'index';
if (file_exists("controler/C$controler.php")) {
    include_once "controler/C$controler.php";
}
?>











<?php
require "veiw/layout/footer.php";
?>