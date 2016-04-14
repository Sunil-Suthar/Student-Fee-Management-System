
<?php  
  require('includes/connection.php');  //include connection file
 require'functions.php'; 
 
 //include function file
  //include 'includes/connection.php';


  if(!isset($_SESSION['user_email'])){
  
    echo " <script> window.open('../index.php','_self')</script>";
    }
    else{
  
    if(isset($_POST['update_post'])){
        
        $pay_cat = $_POST['payment_cat'];
       // echo $pay_cat;
        $pay_mode = $_POST['payment_mode'];   
       // echo $pay_mode;
      
        $get_id = $_SESSION['user_email'];
     $get_pro = "SELECT*FROM student WHERE student_email= '$get_id'";
     $run_pro = mysqli_query($con,$get_pro);

      $row_pro = mysqli_fetch_array($run_pro);
       
        $stu_id = $row_pro['student_id'];
        //echo $stu_id;
        $stu_name = $row_pro['student_name'];
        $stu_email = $row_pro['student_email'];
        $stu_cat1 = $row_pro['student_cat1'];
        $stu_cat2 = $row_pro['student_cat2'];
        $year = $row_pro['year'];
        $year1 = 'Y_'.$year;
        //echo $year1;    
        $stu_year = $row_pro['student_year'];
       
        $other_fee = $row_pro['Other_Fee_Charge'];
        
        if($stu_cat2 == 'UG'){ $table = 'ugfeestructure' ; }
        elseif($stu_cat2 == 'PHD'){$table = 'phdfeestructure' ;}
        else{$table = 'mtfeestructure' ;}

    if($pay_cat == 'Semester Fees'){
        $get_pro1 = "SELECT * FROM $table WHERE catagory = '$stu_cat1'"; 
        $run_pro1 = mysqli_query($con,$get_pro1);
        $row_pro1 = mysqli_fetch_array($run_pro1);
        $stu_fee = $row_pro1[$year1];
        //echo $stu_fee;
     }   
    elseif($pay_cat == 'Mess Fees'){
        $stu_fee = 12000;
    }
    elseif($pay_cat == 'Other Fees'){
        $stu_fee = $other_fee;      
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
    <form class="form-horizontal" role="form" action="payment_fee1.php" method="post" enctype="multipart/form-data">
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
      <div class="form-group">
    <label class="control-label col-sm-2" for="payment_cat">Payment Category</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name = "payment_cat" value="<?php echo $pay_cat;?>"/>
    </div>
  </div>
      <div class="form-group">
    <label class="control-label col-sm-2" for="payment">Payment</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name = "payment" value="<?php echo $stu_fee;?>"/>
    </div>
        </div>
  
      <div class="form-group">
    <label class="control-label col-sm-2" for="payment_mode">Payment Mode</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name = "payment_mode" value="<?php echo $pay_mode;?>"/>
    </div>
  </div>
        </fieldset>
        
       
        
       
  
  
</form>  
    <div class="form-group"> 
    <div class="col-sm-offset-5 col-sm-8">
      <td><a href = "index1.php?payment_fee1= <?php echo $stu_fee ;?> & fee_cat= <?php echo $pay_cat; ?> & pay_mode=<?php echo $pay_mode; ?>" class="btn btn-lg btn-default" >Pay Fees Now</a></td>
    </div>
  </div>
      </div>
</body>
</html>
<?php }
    }?>