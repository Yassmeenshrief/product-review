<?php

        class Database {
    private  $host;
    private  $user;
    private  $password;
    private  $database;
      function __construct(){
           
      $this->host="localhost";
      $this->user="root";
      $this->password="";
      $this->database="Productreview";
      
      $this->connect();  
    
   
     }
      /* connecting with server  and database*/
    private function connect(){
    
     if(!$link=(mysqli_connect($this->host, $this->user,$this->password))){
         
      throw new Exception("server not founded"); 
        
     }
       
     if(!mysqli_select_db($link,$this->database)){
         throw new Exception("Database Not founded");
     }
   
        
    }
      /* check the Erorr in Database and return the link that's used to any function support (i) ex: mysqli_query($link,$query )       */
    private function Check_Database(){
        $mysqli = new mysqli($this->host,  $this->user,  $this->password,  $this->database);
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        }
        return $mysqli;
    }

     /*   Doing the query in database and return the query result      */
      private function Database_Query($query_string)
             
    {
          $connect = $this->Check_Database();
         
         $result = mysqli_query ( $connect , $query_string );
            return  $result ;
    }

///////////////////// SEARCH_IN_DB //////////////////////////////////////////


    public function search_in_db($table,$data,$select)
             {
        
        
                $query  = "SELECT $select FROM $table WHERE ";
                foreach ($data as $key => $value)
                    {
                       $query .=" $key = '$value' AND "; 
                    }
                    
                 $query = rtrim($query, ' AND ');
                 //echo $query;
                $row= $this->Database_Query($query);
     
                
                     
                     if((mysqli_num_rows($row)) >0 ) 
    
                         return 1;
                     if((mysqli_num_rows($row)) <=0)
                         return 0;
                 
      
                   
             }


    
/////////////////////////////// select and return the data'/////////////////////
     public function getdata($table,$data=1,$select)
          {
            
             $sql = "SELECT $select FROM $table WHERE ";
             foreach ($data as $key => $value) 
                 {
                   $sql .= "$key = '$value' AND ";
                 }
             $sql = trim($sql, ' AND ');
        
        
            
              if((mysqli_num_rows($this->Database_Query($sql))) >0 ) 
    
                         return $this->Database_Query($sql);
                     if((mysqli_num_rows($this->Database_Query($sql))) <=0)
                         return 0;
           
       
       
    }

///////////////////////// update ////////////////////////////////////////
    
     public function update_data($table,$data,$where){
         
            $sql=" update $table SET ";
            
            foreach ($data as $key => $value) 
                {
                    $sql .="$key = '$value' , ";   
                }
                  $sql   = trim($sql, ' , ' );
                  $sql .=  " where ";
            
            foreach ($where as $key => $value)
                {
                  $sql .=" $key='$value' and ";
                }
                
            $sql= trim($sql,' and ');
          
           if($this->Database_Query($sql))       return 1;
               
           else  return 0;
              
        }
////////////////////////////////ADD_DATA///////////////////////////////////////////////
        function AddData($data ,$column_name,$TableName)
       
               {
                   $query = "insert into $TableName ("; 
                   
                   foreach ($column_name as $column) {
                       $query .=" $column , ";
                   }
                  $query= trim($query,' , ');
                  $query  .=") values (";
                    foreach (  $data as $value)
                        {
                           $query .= "'$value'," ;
                        }
            
                     $query = trim($query,' , ');
                     
                     $query .= ");";
                    
                      if ($this->Database_Query($query))       return 1;
                        
                      else   return 0;


           }

///////////////////////////////DELETE////////////////////////////////////
           public function Delete_Data ($table,$data)
           {
        
             $query = " Delete from $table  where ";
        
             foreach ($data as $key => $value) 
            {
            
           $query .="$key = '$value' and  "; 
            
            }
        
        $query = trim($query, ' and ' );
         
        if($this->Database_Query($query)) return 1;
           
        
        else      return 0;
           
           }

  }
