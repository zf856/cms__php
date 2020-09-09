<?php

function addnewsCat($data){
    $connection=config();
    $sql="INSERT INTO news_cat (title) VALUES ('$data[title]')";
    mysqli_query($connection,$sql);
}
function listnewscatadmin(){
    $connection=config();
    $sql="SELECT * FROM news_cat";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}

function deletenewscat($id){
    $connection=config();
    $sql="DELETE FROM news_cat WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}
function showeditnewscat($id){
    $connection=config();
    $sql="SELECT * FROM news_cat WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function editnewscat($data,$id){
    $connection=config();
    $sql="UPDATE news_cat SET title='$data[title]' WHERE id='$id'";
    mysqli_query($connection,$sql);
}




