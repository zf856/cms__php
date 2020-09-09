<?php
$id=$_GET['id'];
delete_widget($id);
header("location:dashbord.php?m=widget&p=list");
?>