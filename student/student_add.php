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
				$student_addr = strip_tags($_POST['student_addr']);
				$student_contect = $_POST['student_contect'];
                $student_pass = $_POST['student_pass'];
				
				//getting the image data from the field	
				
				//$product_image=$_FILES['product_image']['name'];
				//$product_image_tmp=$_FILES['product_image']['tmp_name'];
				//move_uploaded_file($product_image_tmp,"product_images/$product_image");
				
				$add_student= "INSERT INTO student(student_id,student_name,student_email,student_cat1,student_cat2,year,student_year,student_addr,student_contect,student_pass)VALUES('$student_id','$student_name','$student_email','$student_cat1','$student_cat2','$year','$student_year','$student_addr','$student_contect','$student_pass')";   
				
				if(mysqli_query($con, $add_student)){
					
						echo "<script> alert('product has been inserted')</script>";
						 echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index.php">';
						//echo "<script> window.open('index.php?insert_product.php','_parent')</script>";
				}
		}
        else
        {}
?>