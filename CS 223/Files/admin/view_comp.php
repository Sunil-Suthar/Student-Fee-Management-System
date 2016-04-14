<?php 
if(isset($_SESSION['user_email'])){
  
    echo " <script> window.open('index1.php?view_profile1','_self')</script>";
    }

    elseif(!isset($_SESSION['user_email1'])){
  
    echo " <script> window.open('../index.php','_self')</script>";
    }
else{
    $get_email = $_SESSION['user_email1'];
  
 
  require('includes/connection.php');  //include connection file
  
  require('functions.php');
  
  if(isset($_GET['view_comp'])){
	  if(isset($_GET['view_sub'])){
	  
    //$get_email = $_GET['user_email1']

    $get_id = $_GET['view_comp'];
    $get_id1 = $_GET['view_sub'];
   // echo $view_sub;
	  
	  $get_pro = "SELECT*FROM complain WHERE student_id= '$get_id' AND complain_sub = '$get_id1'";

      $run_pro = mysqli_query($con,$get_pro);

       $row_pro = mysqli_fetch_array($run_pro);
	 
        $comp_sub = $row_pro['complain_sub'];
        //echo $comp_sub;
        $comp = $row_pro['complain'];
        $comp_time = $row_pro['comp_time'];
        $comp_status = $row_pro['comp_status'];

  }
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
<?php if ($comp_status == 'PENDING') {
  ?>
  <div class="col-md-7 col-md-offset-5">
<td><a href = "index.php?app_comp=<?php echo $get_id ;?> & view_sub=<?php echo $get_id1; ?> & app_con=<?php echo $get_email; ?> & app_sta=<?php echo "Approve"; ?> " class="btn btn-lg btn-default" >Approve</a></td>
</div>

<?php }

else{ ?>
    <div class="col-md-7 col-md-offset-5">
<td><a href = "index.php?app_comp=<?php echo $get_id ;?> & view_sub=<?php echo $get_id1; ?> & app_con=<?php echo $get_email; ?> & app_sta=<?php echo "Pending"; ?> " class="btn btn-lg btn-default" >Pending </a></td>
</div>
    
<?php } ?>


</div>
</body>
</html>    
 <?php } ?> 
    
       
        
        