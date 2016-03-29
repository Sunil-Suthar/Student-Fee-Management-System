<?php 
if(!isset($_SESSION['user_email'])){
	
	echo " <script> window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else{


 
  require('includes/connection.php');  //include connection file
  
  require('functions.php');
  
  if(isset($_GET['view_comp'])){
	  
	  $get_id = $_GET['view_comp'];
	  
	  $get_pro = "SELECT*FROM complain WHERE student_id= '$get_id'";

      $run_pro = mysqli_query($con,$get_pro);

       $row_pro = mysqli_fetch_array($run_pro);
	 
        $comp_sub = $row_pro['complain_sub'];
       // echo $comp_sub;
        $comp = $row_pro['complain'];
        $comp_time = $row_pro['comp_time'];
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Complain</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
    
<body>

<div class="container">
    <div class="col-md-6 col-md-offset-3">
  <h2 align="center">Complain Details</h2>
              
  <table class="table table-bordered table-condensed">
    
      <tr> 
          <th>Complain Time</th>
          <th> <?php echo $comp_time ?></th>              
    </tr>
      <tr>
          <th>Subject</th>
      <th> <?php echo $comp_sub ?>  </th>
      </tr>
      <tr>
          <th>Complain</th>
          <th> <?php echo $comp ?></th>
      </tr>

   
  </table>
    
</div>    
</div>
</body>
</html>    
 <?php } ?> 
    
       
        
        