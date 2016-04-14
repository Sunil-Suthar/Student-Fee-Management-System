<?php

  require('includes/connection.php');  //include connection file
 require'functions.php'; 
       


if(isset($_GET['payment_fee1'])){
  
	  if(isset($_GET['fee_cat'])){
        
        if(isset($_GET['pay_mode'])){
           
				    $stu_email = $_SESSION['user_email'];
                 
					$get_pro = "SELECT*FROM student WHERE student_email= '$stu_email'";

					$run_pro = mysqli_query($con,$get_pro);
					$row_pro = mysqli_fetch_array($run_pro);

					$sem_fee = $row_pro['semester_fee'];
         
					$mess_fee = $row_pro['mess_fee'];
       
					$other_fee = $row_pro['other_fee'];
            
				//getting the text data from the fields

                $pay_fee= $_GET['payment_fee1'];
                 
                  $pay_cat = $_GET['fee_cat'];
        
               
                $pay_mode = $_GET['pay_mode'];
            
				//getting the image data from the field	
                if($pay_cat ==' Semester Fees '){
                       
						if ($sem_fee == 'Done') {
							
						 	echo "<script> alert('Sorry!!  Semester Fees Already Paid')</script>";
							echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index1.php?fee_receipt1">';	
						}
						else {
							$random = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
							$update_payment = "UPDATE student SET semester_fee='Done',semester_fee_date = now() , sem_mode = '$pay_mode', sem_id = '$random' WHERE student_email='$stu_email'"; 
						
							if(mysqli_query($con, $update_payment)){
						
								echo "<script> alert('Semester Payment has been Paid Successfully')</script>";
								 echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index1.php?fee_receipt1">';
							//echo "<script> window.open('index.php?insert_product.php','_parent')</script>";
							}
							
						}
					
									}
				elseif($pay_cat == ' Mess Fees ') {
					if ($mess_fee == 'Done') {
							
						 	echo "<script> alert('Sorry!!  Mess Fees Already Paid')</script>";
							echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index1.php?fee_receipt1">';	
						}
					else {
							$random = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
							$update_payment = "UPDATE student SET mess_fee='Done', mess_fee_date = now()  , mess_mode = '$pay_mode', mess_id = '$random'WHERE student_email='$stu_email'";
						
							if(mysqli_query($con, $update_payment)){
					
								echo "<script> alert('Mess Payment has been Paid Successfully')</script>";
								 echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index1.php?fee_receipt1">';
							//echo "<script> window.open('index.php?insert_product.php','_parent')</script>";
					}
					}
				}
				elseif ($pay_cat == ' Other Fees ') {
                    if($pay_fee == 0){
                            echo "<script> alert('Sorry!!  Other Fees is Rs:0, You can not Pay Zero Amount')</script>";
							echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index1.php?fee_receipt1">';	}
					elseif ($other_fee == 'Done') {
							
						 	echo "<script> alert('Sorry!!  Other Fees Already Paid')</script>";
							echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index1.php?fee_receipt1">';	
						}
					else {
							$random = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
							$update_payment = "UPDATE student SET other_fee='Done' , other_fee_date = now() , other_mode = '$pay_mode', other_id = '$random' WHERE student_email='$stu_email'";
					
						if(mysqli_query($con, $update_payment)){
					
							echo "<script> alert('Other Payment has been Paid Successfully')</script>";
							 echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index1.php?fee_receipt1">';
				}
				}
				}
				//$product_image=$_FILES['product_image']['name'];
				//$product_image_tmp=$_FILES['product_image']['tmp_name'];
				//move_uploaded_file($product_image_tmp,"product_images/$product_image");
				
				//$add_student= "INSERT INTO student(student_id,student_name,student_email,student_cat1,student_cat2,year,student_year,student_addr,student_contect,student_pass)VALUES('$student_id','$student_name','$student_email','$student_cat1','$student_cat2','$year','$student_year','$student_addr','$student_contect','$student_pass')";   
				
				
		}
      }
}
?>