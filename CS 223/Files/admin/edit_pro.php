<?php
if(isset($_SESSION['user_email'])){
  
    echo " <script> window.open('index1.php?view_profile1','_self')</script>";
    }

    elseif(!isset($_SESSION['user_email1'])){
  
    echo " <script> window.open('../index.php','_self')</script>";
    }
else{
	?>

<?php  
  require('includes/connection.php');  //include connection file
  
  require('functions.php');
  
  if(isset($_GET['edit_pro'])){
	  
	  $get_id = $_GET['edit_pro'];
	  
	  $get_pro = "SELECT*FROM student WHERE student_id= '$get_id'";

      $run_pro = mysqli_query($con,$get_pro);

       $i = 0;

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
	}
  
?>

<!DOCTYPE html>
<html>
<head>
                        <title>Update Student Details</title>
                  <meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Bootstrap Tutorial</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
    
<body bgcolor="#ededeb">
    <div class="container">

<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <h2 align="center">Update Student Details</h2>
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_id">Student ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="student_id" value= "<?php echo $stu_id;?>" />
    </div>
  </div>
                                                                                           
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_name">Student Name</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name="student_name" value= "<?php echo $stu_name;?>"/>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="student_email">Student Email</label>
    <div class="col-sm-8"> 
      <input type="email" class="form-control" name="student_email" value= "<?php echo $stu_email;?>" />
    </div>
  </div>
        <div class="form-group">
    <label class="control-label col-sm-2">Category</label>
                   <div class="col-sm-8"> 
                                        <select name="student_cat1">
                                        <option ><?php echo $stu_cat1; ?></option>
                                        <option>GEN</option>
                                        <option>OBC</option>
                                        <option>SC/ST</option>
                                        </select>
                    </div>
        </div>
        <div class="form-group">
    <label class="control-label col-sm-2">Degree</label>
                   <div class="col-sm-8"> 
                                        <select name="student_cat2">
                                        <option > <?php echo $stu_cat2; ?></option>
                                        <option>UG</option>
                                        <option>PHD</option>
                                        <option>M.TECH</option>
                                        
                                        </select>
                    </div>
        </div>
        
        <div class="form-group">
    <label class="control-label col-sm-2" for="year">Admission Year</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name="year" value= "<?php echo $year;?>" />
    </div>
  </div>
        <div class="form-group">
    <label class="control-label col-sm-2">Student Year</label>
                   <div class="col-sm-8"> 
                                        <select name="student_year">
                                        <option ><?php echo $stu_year; ?></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        </select>
                    </div>
        </div>
<div class="form-group">
    <label class="control-label col-sm-2" for="student_other_fee">Other Fees</label>
    <div class="col-sm-8"> 
      <input type="number" class="form-control" name="student_other_fee" min = '0' max = '9999999999' value= "<?php echo $stu_other_fee ;?>" />
    </div>
  </div>

        <div class="form-group">
    <label class="control-label col-sm-2" for="student_addr">Address</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name="student_addr" value= "<?php echo $stu_addr;?>" />
    </div>
  </div>

  
    <div class="form-group">
    <label class="control-label col-sm-2" for="student_contect">Contact Number</label>
    <div class="col-sm-8"> 
      <input type="number" class="form-control" name="student_contect"  value= "<?php  echo $stu_contect;?>" />
    </div>
  </div>
        <div class="form-group">
    <label class="control-label col-sm-2" for="student_pass">Password</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name="student_pass" value= "<?php echo $stu_pass;?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Semester Fees</label>
                   <div class="col-sm-8"> 
                                        <select name="semester_fee">
                                        <option ><?php echo $sem_fee; ?></option>
                                        <option>NULL</option>
                                        <option>Done</option>
                                        </select>
                    </div>
        </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Mess Fees</label>
                   <div class="col-sm-8"> 
                                        <select name="mess_fee">
                                        <option ><?php echo $mess_fee; ?></option>
                                        <option>NULL</option>
                                        <option>Done</option>
                                        </select>
                    </div>
        </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Other Fees</label>
                   <div class="col-sm-8"> 
                                        <select name="other_fee">
                                        <option ><?php echo $other_fee; ?></option>
                                        <option>NULL</option>
                                        <option>Done</option>
                                        </select>
                    </div>
        </div>       
  <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="update_now" value="Update Now"  required >Update </button>
     </div>
   </div>
       
 </form>
</div>
</body>
</html>

<?php

		if(isset($_POST['update_now']))
		{
		
				//getting the text data from the fields
				
				$student_id = strip_tags($_POST['student_id']);
				$student_name = strip_tags($_POST['student_name']);
                $student_email = strip_tags($_POST['student_email']);	
				$student_cat1 = strip_tags($_POST['student_cat1']);
				$student_cat2 = strip_tags($_POST['student_cat2']);
                $year = strip_tags($_POST['year']);
				$student_year = strip_tags($_POST['student_year']);
        $student_other_fee = strip_tags($_POST['student_other_fee']);
        
				$student_addr = strip_tags($_POST['student_addr']);
				$student_contect = $_POST['student_contect'];
                $student_pass = $_POST['student_pass'];
                $s_fee = $_POST['semester_fee'];
                $m_fee = $_POST['mess_fee'];
                $o_fee = $_POST['other_fee'];
				
				//getting the image data from the field	
				if ($s_fee == "NULL") {
                    $s_fee = "";
                }
                if ($m_fee == "NULL") {
                    $m_fee = "";
                }
                if ($o_fee == "NULL") {
                    $o_fee = "";
                }
				//$product_image=$_FILES['product_image']['name'];
				//$product_image_tmp=$_FILES['product_image']['tmp_name'];
				//move_uploaded_file($product_image_tmp,"product_images/$product_image");
				 
			    $update_product= "UPDATE student SET student_name = '$student_name', student_email = '$student_email',student_cat1 = '$student_cat1', student_cat2 = '$student_cat2', year = '$year',student_year = '$student_year',Other_Fee_Charge = '$student_other_fee',student_addr = '$student_addr', student_contect = '$student_contect',student_pass = '$student_pass',semester_fee = '$s_fee',mess_fee = '$m_fee',other_fee = '$o_fee' WHERE student_id='$student_id'";  
				
				$run_product = mysqli_query($con, $update_product); 
				
				if($run_product){
					
						echo "<script> alert('Student Info has been updated')</script>";
						echo "<script>window.open('index.php?view_students','_self')</script>";
						
				}
		}
?>
<?php } ?>