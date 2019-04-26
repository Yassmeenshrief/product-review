<!DOCTYPE html>
<html lang="en">
<head>


<!-- </head>
<body>
<form method="POST" action = 'pdfform.php'>
	<input type="text" name="fname">
	<input type="text" name="lname">
	<input type="submit" name="sub" value="PDF">

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<div class="container" style="padding-top:50px">
<h2>print your pdf file reports</h2>
<form class="form-inline" method="post" action="pdfform.php">
<button type="submit" id="pdf" name="user" class="btn btn-primary" ><i class="fa fa-pdf"" aria-hidden="true"> View  USERS</i></button>
<br/><br/><br/>
<button type="submit" id="pdf" name="product" class="btn btn-primary" ><i class="fa fa-pdf"" aria-hidden="true"> View  products</i></button>


</form>
</fieldset>
</div>
</body>
</html>