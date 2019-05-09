<?php
/* Database connection settings */
$host = 'host';
$user = 'user';
$pass = 'pass';
$db = 'dbname';
// Create connection
$conn = new mysqli($host,$user,$pass,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>