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
