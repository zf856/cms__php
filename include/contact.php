<?php
function addcontact($data){
    $connection=config();
    $sql="INSERT INTO contact_tbl (name,text,subject,email) VALUES ('$data[name]','$data[text]','$data[subject]','$data[email]')";
    mysqli_query($connection,$sql);
}
function listcontactadmin(){
    $connection=config();
    $sql="SELECT * FROM contact_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}
function deletecontact($id){
    $connection=config();
    $sql="DELETE FROM contact_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}
function showdetail($id){
    $connection=config();
    $sql="SELECT * FROM contact_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
/*
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
        $pic=uploader($img,"images/products/",$folder,"product");
    }
    else{
        $pic=$oldpic;
    }
    $connection=config();
    $sql="UPDATE pnews_tbl SET title='$data[title]',text='$data[text]',news_cat='$data[news_cat]',img='$pic' WHERE id='$id'";
    mysqli_query($connection,$sql);
}

function listnewsdefault(){
    $connection=config();
    $sql="SELECT * FROM news_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}*/