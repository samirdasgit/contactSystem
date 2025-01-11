<?php
include 'config.php';
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
  mysqli_query($conn,"INSERT INTO `contact_info` (`full_name`, `mobile_no`, `city`) VALUES('$full_name', '$mobile_no', '$city')");
  echo "Submitted Successfully";
}
?>