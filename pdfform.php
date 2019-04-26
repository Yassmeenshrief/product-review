<?php 


	include ('form.php');
	
	include ('Classes/Admin.php');
	include ('fpdf/fpdf.php');
	$db= new Database();
    $pdf= new FPDF();



 if(isset($_POST['user'])){
 	
	$pdf -> Addpage();
	$pdf->SetFont("Arial","B",16);
	$pdf->cell(0,10,"List of all users",1,1);
    $userssss =$db->getdata('users',$data= array('u_id'),'*');
    while (  $allusers= mysqli_fetch_assoc($userssss) ){
         $fname=$allusers['f_name'];
         $lname=$allusers['l_name'];
         $email=$allusers['e_mail'];
         $Username=$fname." ".$lname;
         $pdf->SetFont("Arial","i",16);
         $pdf->cell(50,10,"$Username",1,0);
         $pdf->cell(0,10,"$email",1,1);
   }
}


 if(isset($_POST['product'])){

	$pdf -> Addpage();
	$pdf->SetFont("Arial","B",16);
 	$pdf->cell(0,10,"List of all products",1,1);
    $productsss =$db->getdata('products',$data= array('p_id'),'*');
    while (  $allproducts= mysqli_fetch_assoc($productsss) ){
         $myproductname=$allproducts['p_name'];
         $myproductdesc=$allproducts['p_description'];
         $myproducprice=$allproducts['p_price'];
         $myproduccategory=$allproducts['p_price'];
         $pdf->SetFont("Arial","i",16);
         $pdf->cell(50,10," $myproductname",1,0);
         $pdf->cell(50,10,"$myproductdesc",1,0);
         $pdf->cell(50,10,"$myproducprice",1,0);
         $pdf->cell(0,10,"$myproduccategory",1,1);
   }
}
 $pdf->output();

 
?>
