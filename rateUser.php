<?php 
include('database.php');
//   session_start();
   error_reporting(0);
  class rates{

     public  function addrate()
{
if(isset($_POST['add'])){

    $db = new Database(); 
    $myrate=$_POST['mrate'];
    $productname=$_POST['Productname'];
    $email=$_SESSION['mail'];
    $fname="haidi";

    $productdata= $db->getdata('products',$data= array('p_name' => $productname ),'p_id');
   // $search=      $db->getdata('users', $data=array('e_mail'=>$email),'*'); 
    $search= $db->getdata('users', $d=array('f_name'=>$fname),'u_id');


   while( $newpid= mysqli_fetch_assoc($productdata)){

         $p_id=$newpid['p_id']."<br>";

}
    while ($re= mysqli_fetch_assoc($search)){
           $u_id= $re['u_id']."<br>"; 


        }



    if($db->AddData($data= array('rate'=>$myrate,'u_id'=>$u_id,'p_id'=>$p_id),$column_name= array('rate','u_id','p_id'),'rates')) 
        {echo "added"; 
}
else echo "not added"; 

        } 
}
 }

?>