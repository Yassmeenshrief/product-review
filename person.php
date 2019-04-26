<?php 
include('database.php'); 
class Person { 
   // private $uid,$fname, $lname, $Email, $password; 
    function __construct(){
      /*  $this->uid;
        $this->fname;
        $this->lname;
        $this->Email;
        $this->password;*/
    }
    
    public function login(){
      
        $name = $_POST ['semail'];
        $password=$_POST['lpassword'];
        $_SESSION['email']= $name;
        $_session['password']= $password;
        
        $db= new database();
        $found = $db-> search_in_db('users',$data=array ('Email'=>$name, 'password'=>$password),'*');
        if($found){
            $data =$db->getdata('users',$data=array ('Email'=>$name, 'password'=>$password),'user_role');
            while( $urole= mysqli_fetch_assoc ($data) ){
                $role = $urole['user_role'];
            }
            if($role==0){
                header('location: homeUser.php');
                
            }
            else if($role==1){
                header('location: HomeAdmin.php');
            }
        else
            echo "not found";
    }
    }

     public function logout(){
        session_destroy();
        header('location: home.php');
    }

        public function search(){
        $sdb = new database();
        $Fname= $sdb ->getdata('products',$data=array('p_name'),'p_name');
        $Fdesc= $sdb ->getdata('products',$data=array('p_name'),'p_description');
        $Fprice= $sdb ->getdata('products',$data=array('p_name'),'p_price');
        
        while ($productN = mysqli_fetch_assoc($Fname)){
        $nams=  $productN['p_name'];
            
    } 
        echo "product name is:".$nams."<br>"; 
        
       while ($productD = mysqli_fetch_assoc($Fdesc)){
            $des=  $productD['p_description'];
    } 
        echo "product desceiprtion is:".$des."<br>"; 
       while ($productP = mysqli_fetch_assoc($Fprice)){
              $price=  $productP['p_price'];
            
    } 
         echo "product Price: " . $price."<br>";
     
    
    
}
    
    
    
    
    
    
}
?>