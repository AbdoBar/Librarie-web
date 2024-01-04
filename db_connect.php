<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "librarie";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die('Database connection error: ' . mysqli_connect_error());
}
?>