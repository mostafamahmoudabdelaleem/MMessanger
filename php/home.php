<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['err-message'] = "Error";
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    header("location: error.php");    
}
else {
    // Makes it easier to read
    $user = $_SESSION['USERNAME'];
    $id = $_SESSION['ID'];
    $email = $_SESSION['MAIL'];
    $mobile = $_SESSION['MOBILE'];
    $profile_pic = $_SESSION['Profile_Pic'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $user ?></title>
        <meta name="description" content="Connect, Chat and Call your friends all over the world for free.">
        <meta name="author" content="Arab Develober">
        <meta name="viewport" content="width=device-width">
        <link rel="icon" type="image/png" href="../img/logo-32px.png">
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body class="background-color-primary-dark">
        <div class="">
            <div class="container center">
                <div>
                    <a href=""><img id="logo" src="../img/logo-256px.png"></a>
                    <h2 class="color-primary"><span><b>Welcome: </b></span><span><?php echo $user?></span></h2>
                    <p class="color-primary"><?php echo $id ?></p>
                    <p class="color-primary"><?php echo $email ?></p>
                    <p class="color-primary"><?php echo $mobile ?></p>
                    <p class="color-primary"><?php echo $profile_pic ?></p>
                </div>
            </div>
        </div>
    </body>
</html>
