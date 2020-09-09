<?php
function addnews($data,$img){
    $connection=config();
    $sql="INSERT INTO news_tbl (title,text,news_cat,img) VALUES ('$data[title]','$data[text]','$data[news_cat]','$img')";
    mysqli_query($connection,$sql);
}
function newscat(){
    $connection=config();
    $sql="SELECT * FROM news_cat";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}
function listnewsadmin(){
    $connection=config();
    $sql="SELECT * FROM news_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}

function selectnewsCat($catid){
    $connection=config();
    $sql="SELECT * FROM news_cat WHERE id=$catid";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res['title'];
}
function deletenews($id){
    $connection=config();
    $sql="DELETE FROM news_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}
function showeditnews($id){
    $connection=config();
    $sql="SELECT * FROM news_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function editnews($data,$id,$img,$oldpic){
    if($_FILES[$img]['name']!=''){
        $a=explode("/",$oldpic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic=uploader($img,"images/news/",$folder,"news");
    }
    else{
        $pic=$oldpic;
    }
    $connection=config();
    $sql="UPDATE news_tbl SET title='$data[title]',text='$data[text]',news_cat='$data[news_cat]',img='$pic' WHERE id='$id'";
    mysqli_query($connection,$sql);
}

function listnewsdefault(){
    $connection=config();
    $sql="SELECT * FROM product_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}