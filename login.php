<?php
 session_start();
include ('person.php');
 if(isset($_POST['login'])){
      
 $p = new Person();
$p->login();
 }
     
?>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>

    <div class="main">
        
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/signin-image.jpg" alt="sing up image"></figure>
                        <a href="register.html" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form" action = "">
                            <div class="form-group">
                                <label for="semail"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="semail" id="semail" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="lpassword"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="lpassword" id="lpassword" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="login" class="form-submit" value="Log In"/>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>