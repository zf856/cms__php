<?php
$id=$_GET['id'];
deletecat($id);
header("location:dashbord.php?m=product_cat&p=list");
?>