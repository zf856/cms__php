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
    $sql="SELECT * FROM product_cat WHERE id='$catid'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res['title'];
}
function deletepro($id){
    $connection=config();
    $sql="DELETE FROM product_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}
function showeditpro($id){
    $connection=config();
    $sql="SELECT * FROM product_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}

 function editpro($data,$id,$img,$oldpic){
    //var_dump($_FILES[$img]);die;
   //die($oldpic);
    if($_FILES[$img]['name']!=''){
        //die('آپلود شد');

        $pic=uploader($img,"../images/products/",$data['title'],"product");
    }
    else{
        //die('آپلود نشد');
        $pic=$oldpic;
    }
    $connection=config();
    $sql="UPDATE product_tbl SET title='$data[title]',text='$data[text]',procat='$data[procat]',img='$pic' WHERE id='$id'";
    mysqli_query($connection,$sql);
}

function listprodefault(){
    $connection=config();
    $sql="SELECT * FROM product_tbl ";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}