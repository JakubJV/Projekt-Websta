<?php
$connection = mysqli_connect('localhost', 'root');

mysqli_select_db($connection, "data");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO 'data'('user','email','message') Values('$user', '$email', '$message') ";

echo "MESSAGE IS SENT";

?>