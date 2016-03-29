<?php 
if(!isset($_SESSION['user_email'])){
	
	echo " <script> window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else{


 
  require('includes/connection.php');  //include connection file
  
  require('functions.php');
  
  //if(isset($_GET['user_email'])){
	  
	  $get_id = $_SESSION['user_email'];
   // echo $get_id;
	  
    $get_pro = "SELECT*FROM admins WHERE admin_email= '$get_id'";
    //echo $get_pro;
      $run_pro = mysqli_query($con,$get_pro);

       $row_pro = mysqli_fetch_array($run_pro);
	   //echo $row_pro;
    	$ad_id = $row_pro['admin_id'];
      //echo $admin_id;
	    $ad_name = $row_pro['admin_name'];
        $ad_email = $row_pro['admin_email'];
	    $ad_cat = $row_pro['catagory'];
        $year = $row_pro['year'];
		  $ad_cont = $row_pro['contect'];
      $ad_addr = $row_pro['address'];  
        
  //}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
    
<body>

<div class="container">
    <div class="col-md-6 col-md-offset-2">
  <h2 align="center">Admin Profile</h2>
              
  <table class="table table-condensed">
    
      <tr> 
          <th>Admin Id</th>
          <th><?php echo $ad_id ?> </th>              
    </tr>
      <tr>
          <th>Name</th>
      <th> <?php echo $ad_name ?> </th>
      </tr>
      <tr>
          <th>Email</th>
          <th> <?php echo $ad_email ?></th>
      </tr>
      <tr>
          <th>Category</th>
          <th> <?php echo $ad_cat ?> </th>
      </tr>
      <tr>
          <th>Joining Year</th>
          <th> <?php echo $year ?> </th>
      </tr>
      <tr>
          <th>Contact Information</th>
          <th> <?php echo $ad_cont ?> </th>
      </tr>
      <tr>
          <th>Address</th>
          <th> <?php echo $ad_addr ?> </th>
      </tr>
      
   
  </table>
    
</div>
    </div>

</body>
</html>
    
    <?php } ?> 
    
       
        
        