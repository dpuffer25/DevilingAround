<?php

$dbhost = "107.180.1.16";
$dbuser = "group8";
$dbpass = "!!Cis440";
$db = "group8";

$connection = new mysqli($dbhost,$dbuser,$dbpass,$db);


$email = $_POST['email'];
$username = $_POST['username'];
$pswd = $_POST['pswd'];
$pswd2 = $_POST['pswd2'];

$input = "INSERT INTO users (email, username, pswd) VALUES ('$email', '$username','$pswd')";

mysqli_query($connection, $input);

$connection->close();
header("Location: https://localhost/deviling_around.html");
?>