<?php
/* Database connection settings */
include 'db1conn.php';

// Parse URL sent data
$message = $_GET['m'];
$sender = $_GET['s'];
$receiver = $_GET['r'];
$time = $_GET['t'];

$sql = "INSERT INTO `Messages` 
        (`ID`, `Message`, `SenderID`, `ReceiverID`, `Time`)
        VALUES 
        (NULL, '$message', '$sender', '$receiver', '$time')";

// inserting data into database
if ($conn->query($sql) === TRUE) {
    echo 'successfull';
} else {
    echo 'unsuccessfull';
}


// Close database connection
include 'db1disconn.php';
?>