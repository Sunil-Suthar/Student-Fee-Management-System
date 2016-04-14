<?php
if(isset($_SESSION['user_email1'])){
  
    echo " <script> window.open('index.php?view_profile','_self')</script>";
    }  

  elseif(!isset($_SESSION['user_email'])){
  
    echo " <script> window.open('../index.php','_self')</script>";
    }
else{
	?>

<?php  
  require('includes/connection.php');  //include connection file
  
  require('functions.php');
  
  
  
?>

 <!DOCTYPE html>

<html>
<head>
                        <title>Student Complain Portel</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                  
</head>
<body>
 <div class="container">
     <div class="row">
        <div class="col-md-6"> 
     <h2>Student Complaint Portal</h2>
  <form class="form-horizontal" role="form" action=" " method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="complain_sub">Subject</label>
      <input type="text" class="form-control" name="complain_sub" required="true">
    </div>
    <div class="form-group">
      <label for="description">Message</label>
      <input type="text" class="form-control" name="description" required="true" >
    </div>
    <button type="submit" class="btn btn-default" name="update_now" value="Update Now">Submit</button>
  </form>  
     </div>
     </div>
      </div>
</body>
</html>

<?php
        $get_id = $_SESSION['user_email'];
        $get_pro = "SELECT*FROM student WHERE student_email= '$get_id'";
        $run_pro = mysqli_query($con,$get_pro);
        $row_pro = mysqli_fetch_array($run_pro);
       
        $stu_id = $row_pro['student_id'];
        $stu_name = $row_pro['student_name'];
        $stu_email = $row_pro['student_email'];
        $stu_cat1 = $row_pro['student_cat1'];
        $stu_cat2 = $row_pro['student_cat2'];
        $year = $row_pro['year'];
        $stu_year = $row_pro['student_year'];

		if(isset($_POST['update_now']))
		{
		
				//getting the text data from the fields
				
				$comp_sub = strip_tags($_POST['complain_sub']);
				$descri = strip_tags($_POST['description']);
                
			//	$comp_time = now();
				//getting the image data from the field	
				
				//$product_image=$_FILES['product_image']['name'
				//$product_image_tmp=$_FILES['product_image']['tmp_name'];
				//move_uploaded_file($product_image_tmp,"product_images/$product_image");
				 
			    $add_comp= "INSERT INTO complain(student_id,student_name,student_email,student_cat1,student_cat2,year,student_year,complain_sub,complain,comp_time)VALUES('$stu_id','$stu_name','$stu_email','$stu_cat1','$stu_cat2','$year','$stu_year','$comp_sub','$descri',now())";
				$comp = mysqli_query($con, $add_comp); 
				
				if($comp){
					
						echo "<script> alert('Your Complain is successfully Submited')</script>";
						echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index.php?view_profile">';
						
				}
		}
?>
<?php }?>