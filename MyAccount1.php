<?php
include ('user.php');
$user= new user();
$user->updateAccount();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="UTF-8">
  <title>My Account</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
      
  
<div class="container">
     <div class="info">
       <h1>My Account</h1><span> 
      </div>
      
 </div>
<div class="form" method = "post">
  <div class="thumbnail"><img src="https://image.flaticon.com/icons/svg/105/105620.svg"/></div>
  
  <form class="MyAccount1" method = "post" action="">
      
      
    <input type="text" name="fname" placeholder="First name"/>
    <input type="text" name="lname" placeholder="Last name"/>
    <input type="email" name="Email" placeholder="Email"/>
    <input type="password" name="password" placeholder="password"/>
      
    <input type="submit" name="submit" value="Update"/>
    
  </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>



         
  </body>