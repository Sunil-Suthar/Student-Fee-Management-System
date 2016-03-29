<?php session_start(); ?>

<?php

if(!isset($_SESSION['user_email'])){
	
	echo " <script> window.open('login.php','_self')</script>";
}
else{
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Student Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?view_profile">Student Login Page</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php?view_profile">View Profile</a></li>
              <li><a href="index.php?fee_structure">Fee Structure</a></li>
              <li><a href="index.php?fee_payment">Payment</a></li>
                <li><a href="index.php?fee_receipt">Fee Receipt</a></li>
                <li><a href="index.php?complain">Complaints</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      
          
          
          <?php
		  //if(isset($_GET['view_profile'])){
			
			//include("view_profile.php");
		  //}
		  if(isset($_GET['view_profile'])){
			include("view_profile.php");
			//echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index.php">';
		  }

		  
		  if(isset($_GET['fee_payment'])){
			
			include("fee_payment.php");
		  }
		  
		  if(isset($_GET['fee_structure'])){
			  include("fee_structure.php");
		  }
		  
		  if(isset($_GET['edit_pro'])){
			  include("edit_pro.php");
		  }

		  if(isset($_GET['complain'])){
			  include("complain.php");
		  }
		  
		  if(isset($_GET['fee_receipt'])){
			  include("fee_receipt.php");
		  }
		  
		  if(isset($_GET['view_cats'])){
			
			  include("view_cats.php");
		  }
		  
		  if(isset($_GET['edit_cat'])){
			  include("edit_cat.php");
		  }
		  
		  if(isset($_GET['delete_cat'])){
			  include("delete_cat.php");
		  }
		  
		  if(isset($_GET['insert_brand'])){
			  include("insert_brand.php");
		  }
		  
		  if(isset($_GET['view_brands'])){
			
			  include("view_brands.php");
		  }
		  
		  if(isset($_GET['edit_brand'])){
			  include("edit_brand.php");
		  }
		  
		  if(isset($_GET['delete_brand'])){
			  include("delete_brand.php");
		  }
		  
		   if(isset($_GET['view_customers'])){
			
			  include("view_customers.php");
		  }
		  if(isset($_GET['delete_customer'])){
			
			  include("delete_customer.php");
		  }
		  
	      ?>
  
          
          
  
        
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php } ?>