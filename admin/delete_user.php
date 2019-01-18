<?php 
include('../connection.php');
$nid=$_GET['id'];
$q=mysqli_query($conn,"delete from faculty where email='$nid'");
header('location:index.php?page=manage_users');
?>