<?php
    include ('database.php');
    session_start();

    error_reporting(0);

class user{



 function signup(){
if(isset($_POST['submit'])){

    $fname   =$_POST['fname'];
    $lname   =$_POST['lname'];
    $Email   =$_POST['Email'];
    $password=$_POST['password'];
    $_SESSION['mail']= $email;
    $_SESSION['password']= $password;
      $obj = new database();
                 $obj->AddData($data= array('f_name'=>$fname ,'l_name'=>$lname,'Email'=>$Email,'password'=>$password),
                 $column_name= array('f_name','l_name','Email','password'),'users');
             }


 }


 function updateAccount(){
if(isset($_POST['submit'])){
    echo'ana dakhalt';

    $fname   =$_POST['fname'];
    $lname   =$_POST['lname'];
    $Email   =$_POST['Email'];
    $password=$_POST['password'];
    $_SESSION['mail']= $email;
    $name =$_SESSION['mail'];
      $obj = new database();
     //$obj->update_data('users', $data=array( 'f_name' =>$fname, 'l_name'=>$lname), $where = array('Email'=>$name) );

     $obj->update_data('users', $data=array( 'f_name' => $fname, 'l_name' => $lname, 'password'=> $password), $where = array('Email'=> $Email) );
             }

 }
}