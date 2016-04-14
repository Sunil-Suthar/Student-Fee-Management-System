<?php 
require('includes/connection.php');  //include connection file
require'functions.php'; 
  
  if(isset($_GET['app_comp'])){
	  if(isset($_GET['view_sub'])){
        if(isset($_GET['app_con'])){
            if(isset($_GET['app_sta'])){
	  
    //$get_email = $_GET['user_email1']
    $get_con = $_GET['app_con'];
   // echo $get_con;
    $get_id = $_GET['app_comp'];
  //  echo $get_id;
    $get_id1 = $_GET['view_sub'];
                
    $app_sta = $_GET['app_sta'];
    
   // echo $get_id1;
   // echo $view_sub;
    if($app_sta == 'Approve'){
            
    $get_pro = "SELECT*FROM admins WHERE admin_email= '$get_con'";
    $run_pro = mysqli_query($con,$get_pro);
    $row_pro = mysqli_fetch_array($run_pro);
    $name = $row_pro['admin_name'];

	  //echo $name ;

    $update_info= "UPDATE complain SET comp_status = '$name' WHERE student_id='$get_id' AND complain_sub = '$get_id1'";
    $run_info = mysqli_query($con, $update_info); 
    if($run_info){
          
            echo "<script> alert('Complaint Has Been Approved')</script>";
            echo "<script>window.open('index.php?view_complain','_self')</script>";

    }
    }
   elseif($app_sta == 'Pending'){
       
       $update_info= "UPDATE complain SET comp_status = 'PENDING' WHERE student_id='$get_id' AND complain_sub = '$get_id1'";
    $run_info = mysqli_query($con, $update_info); 
    if($run_info){
          
            echo "<script> alert('Complaint Status Has Been Changed')</script>";
            echo "<script>window.open('index.php?view_complain','_self')</script>";

    }
   }             
                
  }
  }
      }
}
?>


 
    
       
        
        