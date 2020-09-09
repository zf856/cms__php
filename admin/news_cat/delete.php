<?php
$id=$_GET['id'];
deletenewscat($id);
header("location:dashbord.php?m=news_cat&p=list");
?>