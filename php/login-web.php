<?php
/* Database connection settings */
include 'db1conn.php';
session_start();

// Parse URL sent data
$mobile = $_POST['p'];
$pass = $_POST['pass'];

if($mobile === "admin" && $pass === "admin"){
        header("location: admin.php");
}

// Check Account existance
$sql = "SELECT `USER_ID`, `USERNAME`, `MAIL`, `MOBILE`, `Profile_Pic` FROM `usertable` WHERE `MOBILE`='$mobile' AND `PASS`='$pass'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    $user = $result->fetch_assoc();

    $_SESSION['message'] = 'Logged in successfully';
    $_SESSION['err-message'] = 'no error';

    $_SESSION['ID'] = $user['USER_ID'];
    $_SESSION['USERNAME'] = $user['USERNAME'];
    $_SESSION['MAIL'] = $user['MAIL'];
    $_SESSION['MOBILE'] = $user['MOBILE'];
    $_SESSION['Profile_Pic'] = $user['Profile_Pic'];
    
    $_SESSION['logged_in'] = 1;

    header("location: home.php");
}else{

    $_SESSION['message'] = 'Unable to login';
    $_SESSION['err-message'] = 'Make sure you have entered phone number and password correctly';
    $_SESSION['logged_in'] = 0;

    //header("location: error.php");
}

// Close database connection
include 'db1disconn.php';
?>