<?php

function addproductCat($data){
    $connection=config();
    $sql="INSERT INTO product_cat (title,status,sort) VALUES ('$data[title]','$data[status]','$data[sort]')";
    mysqli_query($connection,$sql);
}
function listprocatadmin(){
    $connection=config();
    $sql="SELECT * FROM product_cat";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}

function deletecat($id){
    $connection=config();
    $sql="DELETE FROM product_cat WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}
function showeditcat($id){
    $connection=config();
    $sql="SELECT * FROM product_cat WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function editcat($data,$id){
    $connection=config();
    $sql="UPDATE product_cat SET title='$data[title]',sort='$data[sort]',status='$data[status]' WHERE id='$id'";
    mysqli_query($connection,$sql);
}




