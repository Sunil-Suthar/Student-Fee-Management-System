
<?php  
  require('includes/connection.php');  //include connection file
 require'functions.php'; 
 
 //include function file
  //include 'includes/connection.php';
    if(isset($_SESSION['user_email'])){
  
    echo " <script> window.open('index1.php?view_profile1','_self')</script>";
    }

    elseif(!isset($_SESSION['user_email1'])){
	
	  echo " <script> window.open('../index.php','_self')</script>";
    }

    else{
  
?>
 
<!DOCTYPE html>

<html>
<head>
       <title>Add New Student</title>
                  <!-- <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
                        <script>tinymce.init({selector:'textarea'});</script>         -->     
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
              <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
</head>
<body bgcolor="#ededeb">
<div class="container">
  <form class="form-horizontal" role="form" action="student_add.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_id">Student ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="student_id" required="true" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_name">Student Name</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name="student_name" required="true" >
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="student_email">Student Email</label>
    <div class="col-sm-8"> 
      <input type="email" class="form-control" name="student_email" required="true">
    </div>
  </div>
        <div class="form-group">
    <label class="control-label col-sm-2">Category</label>
                   <div class="col-sm-8"> 
                                        <select name="student_cat1" required>
                                        <option value = "" > Select Category</option>
                                        <option value = "GEN" >GEN</option>
                                        <option value = "OBC" >OBC</option>
                                        <option value = "SC/ST" >SC/ST</option>
                                        </select>
                    </div>
        </div>
        <div class="form-group">
    <label class="control-label col-sm-2">Degree</label>
                   <div class="col-sm-8"> 
                                        <select name="student_cat2" required>
                                        <option value = "" > Select Degree</option>
                                        <option value = "UG" >UG</option>
                                        <option value = "PHD" >PHD</option>
                                        <option value = "M.TECH" >M.TECH</option>
                                        
                                        </select>
                    </div>
        </div>
        
        <div class="form-group">
    <label class="control-label col-sm-2" for="year">Admission Year</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name="year" required="true">
    </div>
  </div>
        <div class="form-group">
    <label class="control-label col-sm-2">Student Year</label>
                   <div class="col-sm-8"> 
                                        <select name="student_year" required>
                                        <option value = ""   > Select Year</option>
                                        <option value = "1"  >1</option>
                                        <option value = "2"  >2</option>
                                        <option value = "3"  >3</option>
                                        <option value = "4"  >4</option>
                                        </select>
                    </div>
        </div>
        
    <div class="form-group">
    <label class="control-label col-sm-2" for="student_other_fee">Other Fees</label>
    <div class="col-sm-8"> 
      <input type="number" class="form-control" min = "0" max = "9999999999" name="student_other_fee" required="true">
    </div>
  </div>    
    
    <div class="form-group">
    <label class="control-label col-sm-2" for="student_addr">Address</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name="student_addr" required="true">
    </div>
  </div>
    
    <div class="form-group">
    <label class="control-label col-sm-2" for="student_contect">Contact Number</label>
    <div class="col-sm-8"> 
      <input type="tel" pattern=".{10}" class="form-control" name="student_contect"  required="true">
      
    </div>
  </div>
        <div class="form-group">
    <label class="control-label col-sm-2" for="student_pass">Password</label>
    <div class="col-sm-8"> 
      <input type="pasword" class="form-control" name="student_pass" required="true">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="insert_post">Add Student Now</button>
    </div>
  </div>
</form>
    

    </div>  
</body>
</html>
<?php } ?>