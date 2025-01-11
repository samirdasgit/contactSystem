<?php
$conn_server = "localhost";
$conn_username = "root";
$conn_password = "";
$conn_database = "contact_system";

$conn = mysqli_connect($conn_server,$conn_username,$conn_password,$conn_database);
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
?>