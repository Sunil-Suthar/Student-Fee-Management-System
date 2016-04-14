<?php session_start(); ?>

<?php
  if(isset($_SESSION['user_email1'])){
  
    echo " <script> window.open('index.php?view_profile','_self')</script>";
    }  

  elseif(!isset($_SESSION['user_email'])){
  
    echo " <script> window.open('../index.php','_self')</script>";
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
            <a class="navbar-brand" href="index1.php?view_profile1">Student Login Page</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index1.php?view_profile1">View Profile</a></li>
              <li><a href="index1.php?fee_structure1">Fee Structure</a></li>
              <li><a href="index1.php?fee_payment1">Payment</a></li>
                <li><a href="index1.php?fee_receipt1">Fee Receipt</a></li>
                <li><a href="index1.php?complain1">Complaints</a></li>
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
		  if(isset($_GET['view_profile1'])){
			include("view_profile1.php");
			//echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index.php">';
		  }

		  
		  if(isset($_GET['fee_payment1'])){
			
			include("fee_payment1.php");
		  }
		  
        if(isset($_GET['payment_fee1'])){
			
			include("payment_fee1.php");
		  }
		  if(isset($_GET['fee_structure1'])){
			  include("fee_structure1.php");
		  }
		  
		  if(isset($_GET['edit_pro1'])){
			  include("edit_pro1.php");
		  }

		  if(isset($_GET['complain1'])){
			  include("complain1.php");
		  }
		  
		  if(isset($_GET['fee_receipt1'])){
			  include("fee_receipt1.php");
		  }
		  if(isset($_GET['fee_pay_conf'])){
			  include("fee_pay_conf.php");
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