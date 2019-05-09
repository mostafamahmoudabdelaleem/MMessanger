<?php
/* Database connection settings */
include 'db1conn.php';

// Parse URL sent data
$mobile = $_POST['p'];
$pass = $_POST['pass'];

// Check Account existance
$sql = "SELECT `ID`, `USERNAME`, `MAIL`, `MOBILE`, `Profile_Pic` FROM `usertable` WHERE MOBILE='$mobile' AND PASS='$pass'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    $user = $result->fetch_assoc();
    $msg = 'Logged in successfully';
    $arr = array('message' => $msg,
                 'userinfo' => $user,
                 'errormsg' => '');
    echo json_encode($arr);
}else{
    $fuser = array('ID' => 0, 'USERNAME' => 'null', 'MAIL' => 'null', 'MOBILE' => 'null');
    $msg = 'Unable to login';
    $arr = array('message' => $msg,
                 'userinfo' => $fuser,
                 'errormsg' => 'User not found');
    echo json_encode($arr);
}

// Close database connection
include 'db1disconn.php';
?>