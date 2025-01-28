<?php
include 'config.php';
$sl=$_REQUEST['sl'];
if($sl==''){
  echo "Undefined error";
}
else{
  mysqli_query($conn,"DELETE FROM `contact_info` WHERE `sl`='$sl'");
  header('location:contact-list.php');
}
?>