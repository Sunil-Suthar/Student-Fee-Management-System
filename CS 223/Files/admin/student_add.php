<?php

  require('includes/connection.php');  //include connection file
 require'functions.php'; 
        //include 'includes/connection.php';
       // session_start();
		if(isset($_POST['insert_post']))
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
				
				//getting the image data from the field	
				
				//$product_image=$_FILES['product_image']['name'];
				//$product_image_tmp=$_FILES['product_image']['tmp_name'];
				//move_uploaded_file($product_image_tmp,"product_images/$product_image");
				$query = mysqli_query($con, "SELECT student_email FROM student WHERE student_email='" . $student_email . "'");
     			$a = mysqli_num_rows($query);
     			if ((!filter_var($student_email, FILTER_VALIDATE_EMAIL)) OR ($a >= 1))
     			{
         		
         		  echo "<script> alert('Your email is not valid or already exists!')</script>";
         		  echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index.php?add_student">';
     			}
    		 	else{
    		 	$query1 = mysqli_query($con, "SELECT student_id FROM student WHERE student_id = '".$student_id."'");

  				$a1 = mysqli_num_rows($query1);
  				if ($a1 >= 1) {
  					echo "<script> alert('Username already exists!')</script>";
  					echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index.php?add_student">';
  				}
  				else{
  					$add_student= "INSERT INTO student(student_id,student_name,student_email,student_cat1,student_cat2,year,student_year,Other_Fee_Charge,student_addr,student_contect,student_pass)VALUES('$student_id','$student_name','$student_email','$student_cat1','$student_cat2','$year','$student_year','$student_other_fee','$student_addr','$student_contect','$student_pass')";   
				
				if(mysqli_query($con, $add_student)){
					
				echo "<script> alert('New Student has been inserted')</script>";
				echo '<META  HTTP-EQUIV="Refresh" Content = "0.0000001 ; URL = index.php?view_profile">';
  				}
  				}
  				
						//echo "<script> window.open('index.php?insert_product.php','_parent')</script>";
 				 }
				
				
		//		}
		}
        else
        {}
?>