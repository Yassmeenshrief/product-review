<!-- <form method="post">
    <table>
    <tr>
    <td>ID:</td>
    <td><input type="text" name="id"></td>
    </tr>

<tr>
<td>product name:</td>
    <td><input type="text" name="name"></td>
    </tr>

<tr>
    <td>Descreption:</td>
    <td><input type="text" name="description"></td>
    </tr>

  <tr>
    <td>price:</td>
    <td><input type="text" name="price"></td>
    </tr>

    <tr>
    <td><input type="submit" name="add" value="add"></td>
</tr>
    </table>
</form>

<form method="post" action="">

    <input type="text" name="name">
    <input type="submit" name="delete" value="delete">
</form>


<form method="post">
    <table>
    <tr>
    <td>ID:</td>
    <td><input type="text" name="id"></td>
    </tr>

<tr>
<td>product name:</td>
    <td><input type="text" name="name"></td>
    </tr>

<tr>
    <td>Descreption:</td>
    <td><input type="text" name="description"></td>
    </tr>

  <tr>
    <td>price:</td>
    <td><input type="text" name="price"></td>
    </tr>

    <tr>
    <td><input type="submit" name="submit" value="update"></td>
</tr>
    </table>
</form>

<form method="post"> 
   <input type="submit" name="viewAll" value="viewAll">
</form>


 




    
 <?php
include ('products.php');


if(isset($_POST['add'])){
    
$p= new products();
$p->Addproduct()();
}

if(isset($_POST['delete'])){
$p= new products();
$p->deleteproduct();
}

if(isset($_POST['submit'])){

  $c = new products();
  $c->editproduct();
 }
 
if(isset($_POST['viewAll']))
{
    $a = new products(); 
    $a->allproducts(); 
}


?>
 -->