<?php 
if(isset($_SESSION['user_email'])){
  
    echo " <script> window.open('index1.php?view_profile1','_self')</script>";
    }

    elseif(!isset($_SESSION['user_email1'])){
  
    echo " <script> window.open('../index.php','_self')</script>";
    }
else{


 
  require('includes/connection.php');  //include connection file
  
  require('functions.php');
  
  if(isset($_GET['view_pro'])){
	  
	  $get_id = $_GET['view_pro'];
	  
	  $get_pro = "SELECT*FROM student WHERE student_id= '$get_id'";

      $run_pro = mysqli_query($con,$get_pro);

       $row_pro = mysqli_fetch_array($run_pro);
	   
    	$stu_id = $row_pro['student_id'];
	    $stu_name = $row_pro['student_name'];
        $stu_email = $row_pro['student_email'];
	    $stu_cat1 = $row_pro['student_cat1'];
	    $stu_cat2 = $row_pro['student_cat2'];
        $year = $row_pro['year'];
		$stu_year = $row_pro['student_year'];
    $stu_other_fee = $row_pro['Other_Fee_Charge'];
		$stu_addr = $row_pro['student_addr'];
		$stu_contect = $row_pro['student_contect'];
        $stu_pass = $row_pro['student_pass'];
        $sem_fee = $row_pro['semester_fee'];
        $mess_fee = $row_pro['mess_fee'];
        $other_fee = $row_pro['other_fee'];
        

        if ($sem_fee == "NULL") {
        	$sem_fee = 'Due';
       	}
       	if ($sem_fee == "") {
        	$sem_fee = 'Due';
       	}
        if ($mess_fee == "NULL") {
        	$mess_fee = 'Due';
        }
        if ($mess_fee == "") {
        	$mess_fee = 'Due';
        }
        if ($other_fee == "NULL")  {
        	$other_fee = 'Due';
        }
        if ($other_fee == "")  {
        	$other_fee = 'Due';
        }
  }
  
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
    <div class="col-md-6 col-md-offset-3">
  <h2 align="center">Student Details</h2>
              
  <table class="table table-bordered table-condensed">
    
      <tr> 
          <th>Student Id</th>
          <th> <?php echo $stu_id ?></th>              
    </tr>
      <tr>
          <th>Name</th>
      <th> <?php echo $stu_name ?>  </th>
      </tr>
      <tr>
          <th>Email</th>
          <th> <?php echo $stu_email ?></th>
      </tr>
      <tr>
          <th>Category</th>
          <th> <?php echo $stu_cat1 ?> </th>
      </tr>
      <tr>
          <th>Degree</th>
          <th> <?php echo $stu_cat2 ?> </th>
      </tr>
      <tr>
          <th>Admission Year</th>
          <th> <?php echo $year ?> </th>
      </tr>
      <tr>
          <th>Academic Year</th>
          <th> <?php echo $stu_year ?> </th>
      </tr>
      <tr>
          <th>Other Fee </th>
          <th> <?php echo $stu_other_fee ?> </th>
      </tr>
      <tr>
          <th>Address</th>
          <th> <?php echo $stu_addr ?> </th>
      </tr>
      <tr>
          <th>Contact Information</th>
          <th> <?php echo $stu_contect ?> </th>
      </tr>
      <tr>
          <th>Password</th>
          <th> <?php echo $stu_pass ?> </th>
      </tr>
      <tr>
          <th>Semester Fees</th>
          <th> <?php echo $sem_fee ?> </th>
      </tr><tr>
          <th>Mess Fees</th>
          <th> <?php echo $mess_fee ?> </th>
      </tr><tr>
          <th>Other Fees</th>
          <th><?php echo $other_fee ?> </th>
      </tr>
   
  </table>
    
</div>    
</div>
</body>
</html>    
 <?php } ?> 
    
       
        
        