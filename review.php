<?php 
include('database.php');
//   session_start();
   error_reporting(0);

  class review{
public  function addr()
{
if(isset($_POST['addrev'])){

    $db = new Database(); 
    $myreview=$_POST['mreview'];
    $productname=$_POST['Productname'];
    $email=$_SESSION['mail'];
    $fname="nour";

    $productdata= $db->getdata('products',$data= array('p_name' => $productname ),'p_id');
   // $search=      $db->getdata('users', $data=array('e_mail'=>$email),'*'); 
    $search=   $db->getdata('users', $d=array('f_name'=>$fname),'u_id');

   while( $newpid= mysqli_fetch_assoc($productdata)){
         $p_id=$newpid['p_id']."<br>";
// echo "HELLOOOOOOO";

}
    while ($re= mysqli_fetch_assoc($search)){
           $u_id= $re['u_id']."<br>"; 

            // echo "Helloooo";
        }



    if($db->AddData($data= array('review'=>$myreview,'u_id'=>$u_id,'p_id'=>$p_id),$column_name= array('review','u_id','p_id'),'review')) 
        {echo "added"; 
}
else echo "not added"; 

        } 
}

public function deletereview(){
           if(isset($_POST['delete']))
           $ddb= new database();
           $rid =$_POST['id'];
           // $review   = $_POST['review'];
           // $oid   = $_POST['p_id'];
           // $uid   = $_POST['u_id'];
           //$_session['name']= $name;
           $_SESSION['id']= $id;
           $delete = $ddb-> Delete_Data ('review',$data=array('rev_id'=>$rid));

      if ($delete)
        echo 'The Data Is deleted ';
       else
        echo 'Error';

       }




}
?>