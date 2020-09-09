<?php
session_start();
    function config(){
        $server="localhost";
        $user="root";
        $spassword="";
        $db="CMS";
        $connect=mysqli_connect($server,$user,$spassword,$db);
        mysqli_set_charset($connect, "utf8");
        mysqli_query($connect,"SET NAMES 'utf8'");
        return $connect;
    }

//    function uploader($file,$dir,$folder,$name){
//        $file=$_FILES[$file];
//        if(!file_exists($folder)){
//            mkdir($dir.$folder);
//        }
//        $filename=$file['name'];
//        $array=explode(".",$filename);
//        $ext=end($array);
//        $newname=$name."-".rand().".".$ext;
//        $from=$file['tmp_name'];
//        $to=$dir.$folder."/".$newname;
//        move_uploaded_file($from,$to);
//        return $to;
//    }
//include_once 'settings.php';
//$settings=settings();
@$m=$_GET['m']?$_GET['m']:'index';
switch ($m){
    case 'index':
        include_once 'menu.php';
    case 'menu':
        include_once 'menu.php';
    case 'product_cat':
        include_once 'procat.php';
    case 'product':
         include_once 'products.php';
//    case 'news_cat':
//        include_once 'newscat.php';
//    case 'news':
//        include_once 'news.php';
//    case 'contact':
//        include_once 'contact.php';
}