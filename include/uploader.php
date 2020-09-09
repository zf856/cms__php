<?php
function file_uploader($file){
    $file=$_FILES[$file];
    $size=$file['size'];
//        var_dump($file);
//        var_dump($dir);
//        var_dump($folder);die;
    // mkdir($dir.$folder);
    $filename=$file['name'];
    $array=explode(".",$filename);
    // var_dump($array);die;
    $ext=end($array);
    $newname="file-"."-".rand().".".$ext;
    $from=$file['tmp_name'];
    $to="uploader/uploade"."/".$newname;
    move_uploaded_file($from,$to);
    return $a=array($to,$size);
}


function add_file($data,$img,$size){
    $connection=config();
    $sql="INSERT INTO uploader_tbl (title,img,size) VALUES ('$data[title]','$img','$size')";
    mysqli_query($connection,$sql);
}
function list_file(){
    $connection=config();
    $sql="SELECT * FROM uploader_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}

//function newscat(){
//    $connection=config();
//    $sql="SELECT * FROM news_cat";
//    $row=mysqli_query($connection,$sql);
//    while($res=mysqli_fetch_assoc($row)){
//        $result[]=$res;
//    }
//    return $result;
//}
//function listnewsadmin(){
//    $connection=config();
//    $sql="SELECT * FROM news_tbl";
//    $row=mysqli_query($connection,$sql);
//    while($res=mysqli_fetch_assoc($row)){
//        $result[]=$res;
//    }
//    return $result;
//}
//
//function selectnewsCat($catid){
//    $connection=config();
//    $sql="SELECT * FROM news_cat WHERE id=$catid";
//    $row=mysqli_query($connection,$sql);
//    $res=mysqli_fetch_assoc($row);
//    return $res['title'];
//}
//function deletenews($id){
//    $connection=config();
//    $sql="DELETE FROM news_tbl WHERE id='$id'";
//    $row=mysqli_query($connection,$sql);
//}
//function showeditnews($id){
//    $connection=config();
//    $sql="SELECT * FROM news_tbl WHERE id='$id'";
//    $row=mysqli_query($connection,$sql);
//    $res=mysqli_fetch_assoc($row);
//    return $res;
//}
//function editnews($data,$id,$img,$oldpic){
//    if($_FILES[$img]['name']!=''){
//        $a=explode("/",$oldpic);
//        $total=count($a);
//        $folder=$a[$total-2];
//        $pic=uploader($img,"images/news/",$folder,"news");
//    }
//    else{
//        $pic=$oldpic;
//    }
//    $connection=config();
//    $sql="UPDATE news_tbl SET title='$data[title]',text='$data[text]',news_cat='$data[news_cat]',img='$pic' WHERE id='$id'";
//    mysqli_query($connection,$sql);
//}
//
//function listnewsdefault(){
//    $connection=config();
//    $sql="SELECT * FROM news_tbl";
//    $row=mysqli_query($connection,$sql);
//    while($res=mysqli_fetch_assoc($row)){
//        $result[]=$res;
//    }
//    return $result;
//}