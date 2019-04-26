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

if(isset($_POST['delete']))
{
    include('review.php'); 
    $a = new review(); 
    $a ->deletereview(); 
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Review Station</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="MyAccount1.php"><i class="fa fa-user"></i> My Account</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">Pound </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Pound</a></li>
                                    <li><a href="#">Euro</a></li>
                                    <li><a href="#">riyal</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Arabic</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="homeAdmin.php">Review<span>Station</span></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
   <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="homeAdmin.php">Home</a></li>
                        <li class="active"><a href="productsAdmin.php">Products</a></li>
                        <li><a href="ViewAllUsersAdmin.php">View Users</a></li>
                        <li><a href="ViewAllProductsAdmin.php">View Products</a></li>

                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                    <h2><a>Add Products</a></h2>
                <form method = "post" action="">
                    <input type="text" name="id" id="id" placeholder="Proudct ID"/>
                    <input type="text" name="name" id="name" placeholder="Product Name"/>
                    <input type="text" name="description" id="description" placeholder="description"/>
                    <input type="text" name="price" id="price" placeholder="price"/>
                    <input type="submit" name="add" id="add" class="Add products" value="Add"/>
                </form>  
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                        <div class="product-upper">
                    <h2><a>Update Products</a></h2>
                <form method = "post" action="">
                    <input type="text" name="id" id="id" placeholder="Proudct ID"/>
                    <input type="text" name="name" id="name" placeholder="Product Name"/>
                    <input type="text" name="description" id="description" placeholder="description"/>
                    <input type="text" name="price" id="price" placeholder="price"/>
                    <input type="submit" name="submit"  value="Update"/>
                </form>  
                        </div>                       
                    </div>
                </div>

            </div>
                    <!-- delete product -->
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Delete Product</h2>
                        <form method = "post" action="" >
                            <input type="text" name="name" placeholder="Enter Product name">
                            <input type="submit" name="delete" value="Delete">
                        </form>
                    </div>

                    <!-- End delete product -->
                   

                    <!-- delete Review -->
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Delete review</h2>
                        <form method = "post">
                                    <input type="text" name="id" placeholder="Enter Product ID">
                            <input type="submit" name="delete" value="delete">
                        </form>
                    </div>
                    <!-- End delete review -->
        </div>
    </div>

     
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Review<span>Station</span></h2>
                        <p>On our website you can review any product to know which is better for you, Also you can compare more than one product together or you can add them to your favorite to see them later.</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="MyAccount1.php">My account</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="Mobile.php">Mobile Phone</a></li>
                            <li><a href="TV.php">TV Screens</a></li>
                            <li><a href="Laptop.php">Laptops</a></li>
                        </ul>                        
                    </div>
                </div>
                

            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2019 Review Station. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>





<!--                     <div class = "Add products">
                   <form action="">
                    <input type="text" name="id" id="id" placeholder="Proudct ID"/>
                    <input type="text" name="name" id="name" placeholder="Product Name"/>
                    <input type="text" name="description" id="description" placeholder="description"/>
                    <input type="text" name="price" id="price" placeholder="price"/>
                    <input type="submit" name="add" id="add" class="Add products" value="Add"/>
                </form>   -->