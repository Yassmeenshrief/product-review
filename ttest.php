<?php
include ('user.php');
$user= new user();
$user->signup();

?>

<form  method="post" action="">
  <table >
    <tr>
      <td>First Name:</td>
        <td><input type="text" name="fname" /></td>
      </tr>
    <tr>
      <td>Last Name:</td>
        <td><input type="text" name="lname" /></td>
      </tr>
    <tr>
      <td>Email:</td>
        <td><input type="email" name="Email" /></td>
      </tr>
     <tr>
      <td>Password:</td>
        <td><input type="password" name="password" /></td>
      </tr>
    <tr>
        <td><input type="submit" name="submit" value="Sign Up" /></td>
      </tr>
  </table>
</form>



<!-- // -->
<!-- <?php
//  function signup(){

// if(isset($_POST['submit'])){
//     $fname   =$_POST['fname'];
//     $lname   =$_POST['lname'];                 
//     $Email   =$_POST['Email'];
//     $password=$_POST['password'];
//     $_SESSION['mail']= $email;
//     $_SESSION['password']= $password;
      
//                  $obj->AddData($data= array('f_name'=>$fname ,'l_name'=>$lname,'Email'=>$Email,'password'=>$password),
//     	         $column_name= array('f_name','l_name','Email','password'),'users');}
//         if ($obj){
//             echo 'the adding is done ';
//         }
        
//         else 
//            echo 'Erorr';
        
 

//}
?> -->


<!-- <?php
	// require_once('user.php');
 //    $u = new user();
 //    session_start(); 
 //   if(isset($_post['submit'])) 
 //   {
 //    $u->signup();
 //   }
	
?>
 -->


