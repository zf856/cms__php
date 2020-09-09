<?php
function add_widget($data,$img){
    $connection=config();
    $sql="INSERT INTO widget_tbl (title,text,img) VALUES ('$data[title]','$data[text]','$img')";
    mysqli_query($connection,$sql);
}
function list_widget_admin(){
    $connection=config();
    $sql="SELECT * FROM widget_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}
function delete_widget($id){
    $connection=config();
    $sql="DELETE FROM widget_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}
function show_edit_widget($id){
    $connection=config();
    $sql="SELECT * FROM widget_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function edit_widget($data,$id,$img,$oldpic){
    if($_FILES[$img]['name']!=''){
        $a=explode("/",$oldpic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic=uploader($img,"images/widget/",$folder,"widget");
    }
    else{
        $pic=$oldpic;
    }
    $connection=config();
    $sql="UPDATE widget_tbl SET title='$data[title]',text='$data[text]',img='$pic' WHERE id='$id'";
    mysqli_query($connection,$sql);
}
function list_widget_default(){
    $connection=config();
    $sql="SELECT * FROM widget_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
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




function listnewsdefault(){
    $connection=config();
    $sql="SELECT * FROM news_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}*/