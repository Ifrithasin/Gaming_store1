<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection Error");
}
?>
