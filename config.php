<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
//$dbName = "userinformation";
$dbName = "cwb_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

if(!$conn){
    die("<script>alert('Connection Failed.')</script>");
}