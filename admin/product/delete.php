<?php
$id=$_GET['id'];
deletepro($id);
header("location:dashbord.php?m=product&p=list");
?>