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
    function listmenuadmin(){
        $connection=config();
        $sql="SELECT * FROM menu_tbl";
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
        return $result;
    }
    function selectParentMenu($chid){
        $connection=config();
        $sql="SELECT * FROM menu_tbl WHERE id=$chid";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res['title'];
    }
    function deletemenu($id){
        $connection=config();
        $sql="DELETE FROM menu_tbl WHERE id='$id'";
        $row=mysqli_query($connection,$sql);
    }
    function showedit($id){
    $connection=config();
    $sql="SELECT * FROM menu_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function editmenu($data,$id){
   $connection=config();
    $sql="UPDATE menu_tbl SET title='$data[title]',url='$data[url]',sort='$data[sort]',chid='$data[parent]',status='$data[status]' WHERE id='$id'";
    mysqli_query($connection,$sql);
}
