<?php
for($i=0; $i<100; $i++){
  $folderPath='../HTML-Complete/photo/'.rand(100000,999999);
  if(!file_exists($folderPath)){
    //mkdir($folderPath, 0777, true);
  }
}

$password=rand(100000,999999);
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$msg = "Password: ".$password;
//mail("samirallprogrammer@gmail.com","My subject",$msg);
?>