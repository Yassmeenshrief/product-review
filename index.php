<?php
require_once 'database.php';
$DB =new database("localhost","root","","Productreview");

//Search in DB
         /*$result= $DB->search_in_db('products', $data= array('p_id'=> 1 ), '*');
         if($result){
          
           echo 'yesssssssssssss';        }
            if($result==0) {
                 
            echo 'noooooooooooo';
               }*/
// GET DATAA IN DB 
                 /*getdata test */       
     /*$record = $DB->getdata('Products', $d = array ('p_id' => 1),'p_name');
      

    while (   $re= mysqli_fetch_assoc($record) )
     
       echo $re['p_name'];*/

 //////////////Update////////////////////////////////////////////////////
    /*$DB->update_data('products', $data=array( 'p_name' => 'book', 'p_price'=>'300'), $where = array('p_id'=> '1') );*/
////// insert//////////////////////////////////////////

    /*$add= $DB->AddData($data= array('p_id'=>'2','p_name'=>'dress','p_descreption'=>"sdsdsd",'p_price'=>'2000'),
    	$column_name= array('p_id','p_name','P_description','p_price',),'products') ;
        if ($add){
            echo 'the adding is done ';
        }
        
        else 
           echo 'Erorr';*/

           ///////////////////////DELETE////////////////////////////////////

         //Delete Test*/
       $delete = $DB->Delete_Data('products', $data = array('p_id'=> '2'));
       
       if ( $delete  )  echo 'The Data Is deleted ';
       else            echo 'Erorr';