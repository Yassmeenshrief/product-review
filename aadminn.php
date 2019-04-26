<?php
include('database.php');
  
   error_reporting(0);
   class Admin{

 public function allUsers() {
    $db= new database(); 
 $iid =$db->getdata('users',$data= array(''),'u_id');
$fname =$db->getdata('users',$data= array(''),'f_name');
$lname =$db->getdata('users',$data= array(''),'l_name');
$email =$db->getdata('users',$data= array(''),'Email');
echo "<table  border='1px solid black'  border-collapse='collapse'>"; 
echo "<tr><th>ID</th><th>Full Name</th><th>Email</th></tr>";


while ($ids= mysqli_fetch_assoc($iid)){
  
      $fnames = mysqli_fetch_assoc($fname);
      $lnames = mysqli_fetch_assoc($lname);
      $emails = mysqli_fetch_assoc($email);
           $uid    = $ids['u_id'];
         $firstname= $fnames['f_name'];
         $lastname = $lnames['l_name'];
         $email2   = $emails['Email']; 
 
          echo "<tr><td>$uid</td><td>$firstname $lastname</th><td>$email2</td></tr>";
      }

 }
}
?>