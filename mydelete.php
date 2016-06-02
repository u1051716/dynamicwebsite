<?php
require_once("config.php");
if(isset($_POST['submit'])) {
 $id_array = $_POST['data']; // return array
 $id_count = count($_POST['data']); // count array

 for($i=0; $i < $id_count; $i++) {
  $id = $id_array[$i];
  $query = mysqli_query($conn,"DELETE FROM `post` WHERE `postid` = '$id'");
  if(!$query) { die(mysqli_error()); }
 }
 header("Location: mymanagepost.php"); // redirect after deleting
}
?>