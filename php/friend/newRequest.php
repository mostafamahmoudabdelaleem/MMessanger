<?php
/* Database connection settings */
include '../db1conn.php';

if(isset($_GET['from']) and isset($_GET['to'])){
    $from = $_GET['from'];
    $to = $_GET['to'];
    
    $sql = "INSERT INTO `friendrequests` (`From`, `To`) VALUES ('$from', '$to')";
    $result = $conn->query($sql);
}

// Close database connection
include '../db1disconn.php';
?>