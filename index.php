<?php 
session_start();
if($_SESSION['logged_in'] === 1){
    header("location: home.php");    
} 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>mMessenger</title>
        <meta name="description" content="Connect, Chat and Call your friends all over the world for free.">
        <meta name="author" content="Arab Develober">
        <meta name="viewport" content="width=device-width">
        <link rel="icon" type="image/png" href="img/logo-32px.png">
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body class="background-color-primary-dark">

        <!-- Intro Container start -->
        <div id="intro-class" class="">
            <div class="container center" >
                <div>
                    <a href="index.html"><img id="logo" src="img/logo-256px.png"></a>
                    <h2 class="color-primary"><span>Welcome to </span><span><b>mMessenger</b></span></h2>
                    <div class="login-signup">
                        <a id="login" class="hover-color-accent1" href="#login"><p class="color-primary">Login</p></a>
                        <a id="signup" class="hover-color-accent1" href="#signup"><p class="color-primary">Sign up</p></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro Container End -->

        <!-- Login Container Start -->
        <div id="login-class" class="hidden">
            <div class="container center">
                <a href="index.html"><img id="logo" src="img/logo-128px.png"></a>                   
                <form action="php/login-web.php" method="POST">
                    <fieldset>
                        <legend><h3 class="color-primary text-large">Login</h3></legend>
                        <input class="background-color-accent color-primary-dark" id="field" type="phone" name="p" placeholder="Phone">
                        <input class="background-color-accent color-primary-dark" id="field" type="password" name="pass" placeholder="Password">
                        <input class="background-color-primary color-primary-dark" id="button" type="submit" value="Login">                        
                        <div class="login-signup">
                                <p class="color-primary inline">Create new account </p>
                                <a id="signup-login" class="hover-color-accent1" href="#signup"><p class="color-primary">here</p></a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- Login Container End -->

        <!-- Sign up Container Start -->
        <div id="signup-class" class="hidden">
            <div class="container center-signup">
                <a href="index.html"><img id="logo" src="img/logo-128px.png"></a>                   
                <form action="php/reg-web.php" method="POST">
                    <fieldset>
                        <legend><h3 class="color-primary text-large">Signup</h3></legend>
                        <input class="background-color-accent color-primary-dark" id="field" type="text" name="user" placeholder="Username">
                        <input class="background-color-accent color-primary-dark" id="field" type="phone" name="p" placeholder="Phone">
                        <input class="background-color-accent color-primary-dark" id="field" type="password" name="pass" placeholder="Password">
                        <input class="background-color-accent color-primary-dark" id="field" type="email" name="mail" placeholder="E-Mail">
                        <input class="background-color-primary color-primary-dark" id="button" type="submit" value="Sign up">
                        <div class="login-signup">
                                <p class="color-primary inline">Already have an account </p>
                                <a id="login-signup" class="hover-color-accent1" href="#login"><p class="color-primary">Login here</p></a>
                        </div>                        
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- Sign up Container End -->
        
        <!-- Script Loading -->
        <script src="js/script.js"></script>
        <!-- Script Loading -->
    </body>
</html>