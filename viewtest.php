<form method="post"> 
   <input type="submit" name="view" value="viewAll">
</form>

<?php session_start(); 


if(isset($_POST['view']))
{
    include('aadminn.php'); 
    $a = new Admin(); 
    $a->allUsers(); 
}

?>