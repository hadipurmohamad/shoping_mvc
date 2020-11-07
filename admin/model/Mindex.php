<?php
class main{

    
    public function uploder($file,$dir){
        $file_name=$file['name'];
        $file_tmp_dir=$file['tmp_name'];
        $array=explode(".",$file_name);
        $extention=end($array);
        $from=$file_tmp_dir;
        $name=rand().".".$extention;
        if (!file_exists($dir)) {
            mkdir($dir);
        }
        $to=$dir."/".$name;
        if ( move_uploaded_file($from,$to)) {
            return $name;
        }else{
            return false;
        }
        
    }

}

?>