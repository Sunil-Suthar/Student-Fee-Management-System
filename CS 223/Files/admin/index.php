<?php session_start(); ?>

<?php

 //$role = $_SESSION['user_role'] ;

if(isset($_SESSION['user_email'])){
  
    echo " <script> window.open('index1.php?view_profile1','_self')</script>";
    }

    elseif(!isset($_SESSION['user_email1'])){
	
	  echo " <script> window.open('../index.php','_self')</script>";
    }
else{
?>
<!DOCTYPE html>
<html>
<head>

<title>Admin Profile</title>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>
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
            <a class="navbar-brand" href="index.php?view_profile">Admin Login Page</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php?view_profile">View Profile</a></li>
              <li><a href="index.php?add_student">Add New Student</a></li>
              <li><a href="index.php?view_students">View All Students</a></li>

                <li><a href="index.php?fee_structure">View/Update Fee Structure</a></li>
                <li><a href="index.php?view_complain">View Complains</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    
    
    
    
    
          
          <div class="left">
          
          
          <?php
		  if(isset($_GET['view_profile'])){
			include("view_profile.php");
			//echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index.php">';
		  }
		  
		  if(isset($_GET['add_student'])){
			
			include("add_student.php");
		  }
		  if(isset($_GET['view_students'])){
			
			include("view_students.php");
		  }
		  
		  if(isset($_GET['fee_structure'])){
			  include("fee_structure.php");
		  }
		  
		  if(isset($_GET['edit_pro'])){
			  include("edit_pro.php");
		  }

		  if(isset($_GET['delete_pro'])){
			  include("delete_pro.php");
		  }
		  
		  if(isset($_GET['view_pro'])){
			  include("view_pro.php");
		  }
		  
		  if(isset($_GET['ugfee_edit'])){
			
			  include("ugfee_edit.php");
		  }
		  
		  if(isset($_GET['phdfee_edit'])){
			  include("phdfee_edit.php");
		  }
		   if(isset($_GET['mtfee_edit'])){
			  include("mtfee_edit.php");
		  }
		  

		  if(isset($_GET['view_complain'])){
			  include("view_complain.php");
		  }
		  
		  
		  if(isset($_GET['view_comp'])){
			  include("view_comp.php");
		  }
		  
		  if(isset($_GET['app_comp'])){
			  include("app_comp.php");
		  }
		  
	      ?>
           </div>
          
          
  </div>



</body>
</html>

<?php } ?>