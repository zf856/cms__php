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
    function addmenu($data){
        //var_dump($data);die;
        $connection=config();
        $sql="INSERT INTO menu_tbl (title,url,status,chid,sort) VALUES ('$data[title]','$data[url]','$data[status]','$data[parent]','$data[sort]')";
        mysqli_query($connection,$sql);
    }
    function submenu(){
        $connection=config();
        $sql="SELECT * FROM menu_tbl WHERE chid='0'";
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
        return $result;
    }

