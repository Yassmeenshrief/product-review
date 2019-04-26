<?php
   include('database.php');
   // session_start();
   error_reporting(0);
   class products{

    public function Addproduct(){
        if(isset($_POST['add']))

        $adb=new database();
        $id   =$_POST['id'];
        $name   =$_POST['name'];
        $description =$_POST['description'];
        $price =$_POST['price'];

        $_SESSION['id']= $id;
        $_session['name']= $name;
        $_SESSION['description']= $description;
        $_session['price']= $price;

        $add=$adb->AddData($data=array('p_id'=>$id,'p_name'=>$name,'p_description'=>$description,'p_price'=>$price) , $column_name= array('p_id','p_name','p_description','p_price') ,'products');

    } 
   


   public function deleteproduct(){
           if(isset($_POST['delete']))
           $ddb= new database();
           $name   =$_POST['name'];
           $id     = $_POST['id'];

           $_session['name']= $name;
           $_SESSION['id']= $id;
           $delete = $ddb-> Delete_Data ('products',$data=array('p_name'=>$name));

      if ($delete)  
        echo 'The Data Is deleted ';
       else            
        echo 'Erorr';

       }

       public function editproduct(){
           
           if(isset($_POST['submit']))
           $id     =$_POST['id'];
           $name   =$_POST['name'];
           $description =$_POST['description'];
           $price       =$_POST['price'];

           
            $_SESSION['id']= $id;
            $_session['name']= $name;
            $_SESSION['description']= $description;
            $_session['price']= $price;
           $edb = new database();
           $edb -> update_data('products',$data = array('p_name' =>$name,'p_description'=>$description, 'p_price'=>$price),$where = array('p_id'=>$id) );
       }

       public function allproducts(){
    $apdb= new database();
    $iid =$apdb->getdata('products',$data= array(''),'p_id');
    $name =$apdb->getdata('products',$data= array(''),'p_name');
    $description =$apdb->getdata('products',$data= array(''),'p_description');
    $price =$apdb->getdata('products',$data= array(''),'p_price');

    echo "<table  border='3px solid black'  border-collapse='collapse'>"; 
    echo "<tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th></tr>";

    while ($ids= mysqli_fetch_assoc($iid)){
         $names = mysqli_fetch_assoc($name);
         $descriptionss = mysqli_fetch_assoc($description);

          $pricess = mysqli_fetch_assoc($price);
           $pid    = $ids['p_id'];
         $pname= $names['p_name'];
         $pdescription = $descriptionss['p_description'];
         $pprice   = $pricess['p_price']; 
 
          echo "<tr><td>$pid</td><td>$pname</td><td>$pdescription</td><td>$pprice</td></tr>";
      }
  }
     }
?>