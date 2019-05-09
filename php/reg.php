<?php 
/* Database connection settings */
include 'db1conn.php';

// Parse URL sent data
$mail = $_GET['mail'];
$user = $_GET['user'];
$pass = $_GET['pass'];
$mobile = $_GET['p'];

// Registering new user
$sql = "INSERT INTO `usertable` (`ID`, `USERNAME`, `MAIL`, `PASS`, `MOBILE`) VALUES (NULL, '$user', '$mail', '$pass', '$mobile')";

// inserting data into database
if ($conn->query($sql) === TRUE) {
    echo '{"message" : "success", "errormsg":""}';
} else {
    echo '{"message" : "unsuccess", "errormsg":"Error while adding new user"}';
}

// Close database connection
include 'db1disconn.php';
?>