<?php
/* Database connection settings */
include '../db1conn.php';

if(isset($_GET['requestId'])){
    $requestId = $_GET['requestId'];
    
    $sql = "UPDATE `friendrequests` SET `Accepted` = '1' WHERE `friendrequests`.`FriendRequestID` = '$requestId'";
    $result = $conn->query($sql);
}

// Close database connection
include '../db1disconn.php';
?>