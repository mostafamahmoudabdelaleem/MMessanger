<?php 
/* Database connection settings */
include 'db1conn.php';
session_start();

// Parse URL sent data
$mail = $_POST['mail'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$mobile = $_POST['p'];

// Registering new user
$sql = "INSERT INTO `usertable` (`ID`, `USERNAME`, `MAIL`, `PASS`, `MOBILE`) VALUES (NULL, '$user', '$mail', '$pass', '$mobile')";

// inserting data into database
if ($conn->query($sql) === TRUE) {
    header("location: ../#login");    
} else {
    $_SESSION['message'] = 'Registeration in unsuccessfull';
    $_SESSION['err-message'] = 'Error while adding new user';
    header("location: error.php");
}

// Close database connection
include 'db1disconn.php';
?>