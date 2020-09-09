<?php
$id=$_GET['id'];
deletecontact($id);
header("location:dashbord.php?m=contact&p=list");
?>