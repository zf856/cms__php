<?php
session_start();
    function config(){
        $server="localhost";
        $user="root";
        $spassword="";
        $db="CMS";
        $connect=mysqli_connect($server,$user,$spassword,$db);
        mysqli_set_charset($connect,"utf-8");
        mysqli_query($connect,"SET NAMES 'UTF8'");
        return $connect;
    }

function addmenu($data){
  // var_dump($data);die;
    $connection=config();
    $sql="INSERT INTO menu_tbl (title,url,status,chid,sort) VALUES ('$data[title]','$data[url]','$data[status]','$data[parent]','$data[sort]')";
    mysqli_query($connection,$sql);
}