<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "userinformation";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

if(!$conn){
    die("<script>alert('Connection Failed.')</script>");
}
// $sql = "INSERT INTO Users (firstName, lastName, email_address, password, gender, birth_date)
// VALUES ('$firstName', '$lastName', '$email_address', '$password', '$gender', '$birth_date')";

// if ($conn->query($sql) === true) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
