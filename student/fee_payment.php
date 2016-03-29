
<?php  
  require('includes/connection.php');  //include connection file
 require'functions.php'; 
 
 //include function file
  //include 'includes/connection.php';
    if(!isset($_SESSION['user_email'])){
	
	  echo " <script> window.open('login.php?not_admin=You are not an Admin!!!','_self')</script>";
    }
    else{
  
  if(isset($_SESSION['user_email'])){
      
      $get_id = $_SESSION['user_email'];

      
      $get_pro = "SELECT*FROM student WHERE student_email= '$get_id'";

      $run_pro = mysqli_query($con,$get_pro);

       $i = 0;

       $row_pro = mysqli_fetch_array($run_pro);
       
        $stu_id = $row_pro['student_id'];
        //echo $stu_id;
        $stu_name = $row_pro['student_name'];
        $stu_email = $row_pro['student_email'];
        $stu_cat1 = $row_pro['student_cat1'];
        $stu_cat2 = $row_pro['student_cat2'];
        $year = $row_pro['year'];
        $stu_year = $row_pro['student_year'];
        $stu_addr = $row_pro['student_addr'];
        $stu_contect = $row_pro['student_contect'];
        $stu_pass = $row_pro['student_pass'];
        $sem_fee = $row_pro['semester_fee'];

        
  }
?>
 
<!DOCTYPE html>

<html>
<head>
       <title>Fee Payment</title>
                   <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
                        <script>tinymce.init({selector:'textarea'});</script>                 
</head>
<body bgcolor="#ededeb">
<div class="container">
    <h2 align="center">Fee Payment</h2>
    <form class="form-horizontal" role="form" action="payment_fee.php" method="post" enctype="multipart/form-data">
  <fieldset disabled>
  <div class="form-group">
    <label class="control-label col-sm-2">Student ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="disabledTextInput" value="<?php echo $stu_id;?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_name">Student Name</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" value="<?php echo $stu_name;?>"/>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="student_email">Student Email</label>
    <div class="col-sm-8"> 
      <input type="email" class="form-control" value="<?php echo $stu_email;?>"/>
    </div>
  </div>
        
    
        <div class="form-group">
    <label class="control-label col-sm-2" for="year">Admission Year</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" value="<?php echo $year;?>"/>
    </div>
  </div>
        </fieldset>
        <div class="form-group">
    <label class="control-label col-sm-2">Payment Category</label>
                   <div class="col-sm-8"> 
                                        <select name="payment_cat" required>
                                        <option value = ""> Select Cataory</option>
                                        <option value = "Semester Fees" >Semester Fees</option>
                                        <option value = "Mess Fees">Mess Fees</option>
                                        <option value = "Other Fees">Other Fees</option>
                                        </select>
                    </div>
        </div>
        <div class="form-group">
    <label class="control-label col-sm-2">Payment Mode</label>
                   <div class="col-sm-8"> 
                                         <select name="payment_mode" required>
                                        <option value = ""> Select mode</option>
                                        <option value = "Net Banking">Net Banking</option>
                                        <option value = "Debit/Credit Card">Debit/Credit Card</option>
                                        <option value = "DD">DD</option>
                                        </select>
                    </div>
        </div>
        
       
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="update_post" value="Pay Fees Now" required>Pay Fees</button>
    </div>
  </div>
</form>    
      </div>
</body>
</html>
<?php } ?>