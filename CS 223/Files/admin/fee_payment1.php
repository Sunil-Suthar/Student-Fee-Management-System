
<?php  
  require('includes/connection.php');  //include connection file
 require'functions.php'; 
 
 //include function file
  //include 'includes/connection.php';
   if(isset($_SESSION['user_email1'])){
  
    echo " <script> window.open('index.php?view_profile','_self')</script>";
    }  

  elseif(!isset($_SESSION['user_email'])){
  
    echo " <script> window.open('../index.php','_self')</script>";
    }
    else{
  
  
      
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
       
     $get_pro1 = "SELECT*FROM feelastdate WHERE id = '1'";
    $run_pro1 = mysqli_query($con,$get_pro1);
    $row_pro1 = mysqli_fetch_array($run_pro1);   
    $last_date = $row_pro1['last_date'];             
   $t=time();
    
        
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
    <?php 
        if($last_date >= date("Y-m-d",$t)){
            
?>
    <h2 align="center">Fee Payment</h2>
    <form class="form-horizontal" role="form" action="index1.php?fee_pay_conf" method="post" enctype="multipart/form-data">
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
                                        <option value = ""> Select Category</option>
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
                                        <option value = ""> Select Mode</option>
                                        <option value = "Net Banking">Net Banking</option>
                                        <option value = "Debit/Credit Card">Debit/Credit Card</option>
                                        <option value = "DD">DD</option>
                                        </select>
                    </div>
        </div>
        
       
  
  <div class="form-group"> 
    <div class="col-sm-offset-5 col-sm-10">
      <button type="submit" class="btn btn-default" name="update_post" value="Pay Fees Now" required>Pay Fees</button>
    </div>
  </div>
</form>  
<?php } 
    else {
        ?>
    <h2 align="center">Fee Payment Portal Has Been Closed </h2>
<?php  }    ?>    
    
</div>
</body>
    

</html>
<?php } ?>