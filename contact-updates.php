<?php
include 'config.php';
$sl=$_POST['sl'];
$full_name=$_POST['full_name'];
$mobile_no=$_POST['mobile_no'];
$city=$_POST['city'];

if($full_name==''){
  echo "Please enter name";
}
elseif ($mobile_no=='') {
  echo "Please enter mobile no";
}
elseif ($city=='') {
  echo "Please enter city";
}
else{
  mysqli_query($conn,"UPDATE `contact_info` SET `full_name`='$full_name', `mobile_no`='$mobile_no', `city`='$city' WHERE `sl`='$sl'");
  echo "Update Successfully";
}
?>