<form method="post">
	<input type="email" name="semail">
	<input type="password" name="lpassword">
	<input type="submit" name="login" value="login">
</form>
<?php
 session_start();
include ('person.php');
 if(isset($_POST['login'])){
      
 $p = new Person();
 echo "noura";
$p->login();
 }
     
?>