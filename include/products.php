<?php
function addpro($data,$img){
    $connection=config();
    $sql="INSERT INTO product_tbl (title,text,procat,img) VALUES ('$data[title]','$data[text]','$data[procat]','$img')";
    mysqli_query($connection,$sql);
}
function procat(){
    $connection=config();
    $sql="SELECT * FROM product_cat";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}
function listproadmin(){
    $connection=config();
    $sql="SELECT * FROM product_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}
function selectProcat($catid){
    $connection=config();
    $sql="SELECT * FROM product_cat WHERE id=$catid";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res['title'];
}
function deletepro($id){
    $connection=config();
    $sql="DELETE FROM product_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}