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
//1
//    function uploader($file,$dir,$folder){
//        $file=$_FILES[$file];
//        var_dump($file);
//        var_dump($dir);
//        var_dump($folder);die;
//        mkdir($dir.$folder);
//        if(!file_exists($folder)){
//            mkdir($dir.$folder);
//        }
//        $filename=$file['name'];
//        $array=explode(".",$filename);
//          var_dump($array);die;
//        $ext=end($array);
//
//
//    }
    //2
    function uploader($file,$dir,$folder,$name){
        $file=$_FILES[$file];
//        var_dump($file);
//        var_dump($dir);
//        var_dump($folder);die;
       // mkdir($dir.$folder);
        if(!file_exists($folder)){
            mkdir($dir.$folder);
        }
        $filename=$file['name'];
        $array=explode(".",$filename);
         // var_dump($array);die;
        $ext=end($array);
        $newname=$name."-".rand().".".$ext;
        $from=$file['tmp_name'];
        $to=$dir.$folder."/".$newname;
        move_uploaded_file($from,$to);
        return $to;
    }

    //2
//    function uploader($file,$dir,$folder,$name){
//        $file=$_FILES[$file];
//        if(!file_exists($folder)){
//            mkdir($dir.$folder);
//        }
//        $filename=$file['name'];
//        $array=explode(".",$filename);
// var_dump($array);die;
//        $ext=end($array);
//        $newname=$name."-".rand().".".$ext;
//        $from=$file['tmp_name'];
//        $to=$dir.$folder."/".$newname;
//        move_uploaded_file($from,$to);
//        return $to;
//    }
include_once 'settings.php';
$settings=settings();
@$m=$_GET['m']?$_GET['m']:'index';
switch ($m){
    case 'index':
        include_once 'menu.php';
        include_once 'widget.php';
        include_once 'procat.php';
        include_once 'products.php';
        include_once 'newscat.php';
        include_once 'news.php';
        include_once 'contact.php';
        break;
    case 'menu':
        include_once 'menu.php';
        break;
    case 'page':
        include_once 'page.php';
        break;

    case 'product_cat':
        include_once 'procat.php';
        break;
    case 'product':
        include_once 'products.php';
        break;
    case 'news_cat':
        include_once 'newscat.php';
        break;
    case 'news':
        include_once 'news.php';

    case 'widget':
        include_once 'widget.php';
        break;
    case 'contact':
        include_once 'contact.php';
        break;
        case 'uploader':
        include_once 'uploader.php';
        break;
}