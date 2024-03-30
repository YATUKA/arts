<?php
$username = "your_name";
$password = "your_pass";
$hostname = "localhost";
//connection to the database
$dbConnect = mysqli_connect($hostname,$username, $password)
or die("CONNECTION FAILED!");
echo ("SUCCESSFUL CONNECTION!");
//select database for the connection
$dbSelect = mysqli_select_db("makaveli", $dbConnect)
or die("FAILED");
?>