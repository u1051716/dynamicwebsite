<?php 
include('config.php');
session_start();
$edit_id=$_GET['app_id'];
$sql="UPDATE registration SET `status`='1' WHERE registerid='$edit_id'";
$res=mysqli_query($sql);
header('location:adminmanageuser.php');
?>