<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo($_SESSION['message']); ?></title>
        <meta name="description" content="Connect, Chat and Call your friends all over the world for free.">
        <meta name="author" content="Arab Develober">
        <meta name="viewport" content="width=device-width">
        <link rel="icon" type="image/ico" href="../img/logo-32px.png">
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body class="background-color-primary-dark">
        <div class="">
            <div class="container center">
                <div>
                    <a href="https://mmessenger.000webhostapp.com/"><img id="logo" src="../img/logo-256px.png"></a>
                    <h2 class="color-primary"><span><b>Error: </b></span><span><?php echo($_SESSION['message']); ?></span></h2>
                    <p class="color-primary">
                        <?php 
                            if( isset($_SESSION['err-message']) AND !empty($_SESSION['err-message'])){
                                echo $_SESSION['err-message'];
                            }
                        ?>
                    </p>
                    <a href="../index.html" style=text-decoration-line:none><p class="color-primary">Home</p></a>
                </div>
            </div>
        </div>
    </body>
</html>