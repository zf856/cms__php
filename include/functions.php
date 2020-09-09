<?php
session_start();
    function config(){
        $server="localhost";
        $user="root";
        $spassword="";
        $db="CMS";
        $connect=mysqli_connect($server,$user,$spassword,$db);
       // var_dump($connect);die;
        mysqli_set_charset($connect,"utf-8");
        mysqli_query($connect,"SET NAMES 'UTF8'");
        return $connect;
    }

