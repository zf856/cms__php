<?php
function addpro($data){
    $connection=config();
    $sql="INSERT INTO product_tbl (title,text,procat) VALUES ('$data[title]','$data[text]','$data[procat]')";
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
