<!DOCTYPE html>
<html>
<head>
  <title>Fees Payment Receipt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

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
        $year1 = 'Y_'.$year;
        $stu_contect = $row_pro['student_contect'];

        $sem_fee = $row_pro['semester_fee'];
        $mess_fee = $row_pro['mess_fee'];
        $other_fee = $row_pro['other_fee'];

        $sem_fee_d = $row_pro['semester_fee_date'];
        $mess_fee_d = $row_pro['mess_fee_date'];
        $other_fee_d = $row_pro['other_fee_date'];

        $sem_m = $row_pro['sem_mode'];
        $mess_m = $row_pro['mess_mode'];
        $other_m = $row_pro['other_mode'];

        $sem_ids = $row_pro['sem_id'];
        $mess_ids = $row_pro['mess_id'];
        $other_ids= $row_pro['other_id'];
     
      $other_fee1 = $row_pro['Other_Fee_Charge'];
      
      if($stu_cat2 == 'UG'){ $table = 'ugfeestructure' ; }
        elseif($stu_cat2 == 'PHD'){$table = 'phdfeestructure' ;}
        else{$table = 'mtfeestructure' ;}

    //if($pay_cat == 'Semester Fees'){
        $get_pro1 = "SELECT * FROM $table WHERE catagory = '$stu_cat1'"; 
        $run_pro1 = mysqli_query($con,$get_pro1);
        $row_pro1 = mysqli_fetch_array($run_pro1);
        $stu_fee_sem = $row_pro1[$year1];
        //echo $stu_fee;
    // }   
    //elseif($pay_cat == 'Mess Fees'){
        $stu_fee_mess = 12000;
    //}
   // elseif($pay_cat == 'Other Fees'){
        $stu_fee_other = $other_fee1;      
    // }
        
  }
?>
 


<!-- <body bgcolor="#ededeb">
        <div class="">

        </div>

        <table  width="600px"  border="2" align="center" bgcolor="Gainsboro">
              -->   
               <!--Table Heading Section 
                 <tr align="center">
                        <td colspan="12"><h2>Fee Payment Receipt</h2></td>
                </tr>
        </table>      
</body>
-->
<body>

  <div class="container">
    <div class="row col-md-6 col-md-offset-3">
      <h2 style="text-align:center;">Fees Payment Receipt</h2>
      
  <?php
        if($sem_fee == 'Done'){
  ?>
     <h3 style="color:blue;"  >Semester Payment</h3>
      <table class="table table-bordered ">
        <colgroup>
            <col  class="col-md-3 bg-info">
            <col class="col-md-3 bg-info">
        </colgroup>
          <tr  >
            <th style="text-align:center;">  Transaction Id </th>    
            <th  style="text-align:center;"> <?php echo $sem_ids ?> </th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Candidate Name </th>    
            <th  style="text-align:center;"> <?php echo $stu_name ?> </th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Candidate Email </th>    
            <th  style="text-align:center;"><?php echo $stu_email ?> </th>
           </tr>
           <tr  >
            <tr  >
            <th style="text-align:center;"> Candidate Year </th>    
            <th  style="text-align:center;"> <?php echo $year ?> </th>
           </tr>
            <tr  >
            <th style="text-align:center;"> Candidate Contect </th>    
            <th  style="text-align:center;"> +91-<?php echo $stu_contect ?> </th>
           </tr>
          <tr>
            <th style="text-align:center;"> Transaction Date </th>    
            <th  style="text-align:center;"> <?php echo $sem_fee_d ?> </th>
           </tr>
          <tr>
            <th style="text-align:center;"> Amount </th>    
            <th  style="text-align:center;"> <?php echo $stu_fee_sem ?> </th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Payment Mode </th>    
            <th  style="text-align:center;"> <?php echo $sem_m ?></th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Payment Status </th>    
            <th  style="text-align:center;">  SUCCESS </th>
           </tr>


     </table>
           <br>


<?php } ?>

 
  <?php
        if($mess_fee == 'Done'){
  ?>
     <h3 style="color:blue;"  >Mess Payment</h3>
      <table class="table table-bordered ">
        <colgroup>
            <col  class="col-md-3 bg-info">
            <col class="col-md-3 bg-info">
        </colgroup>
          <tr  >
            <th style="text-align:center;">  Transaction Id </th>    
            <th  style="text-align:center;"> <?php echo $mess_ids ?> </th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Candidate Name </th>    
            <th  style="text-align:center;"> <?php echo $stu_name ?> </th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Candidate Email </th>    
            <th  style="text-align:center;"><?php echo $stu_email ?> </th>
           </tr>
           <tr  >
            <tr  >
            <th style="text-align:center;"> Candidate Year </th>    
            <th  style="text-align:center;"> <?php echo $year ?> </th>
           </tr>
            <tr  >
            <th style="text-align:center;"> Candidate Contect </th>    
            <th  style="text-align:center;"> +91-<?php echo $stu_contect ?> </th>
           </tr>
          <tr>
            <th style="text-align:center;"> Transaction Date </th>    
            <th  style="text-align:center;"> <?php echo $mess_fee_d ?> </th>
           </tr>
          <tr>
            <th style="text-align:center;"> Amount </th>    
            <th  style="text-align:center;"> <?php echo $stu_fee_mess ?> </th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Payment Mode </th>    
            <th  style="text-align:center;"> <?php echo $mess_m ?></th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Payment Status </th>    
            <th  style="text-align:center;">  SUCCESS </th>
           </tr>

     </table>
   <br>
     

  <?php } ?>

  <?php
        if($other_fee == 'Done'){
  ?>
     <h3 style="color:blue;"  >Other Payment</h3>
      <table class="table table-bordered ">
        <colgroup>
            <col  class="col-md-3 bg-info">
            <col class="col-md-3 bg-info">
        </colgroup>
          <tr  >
            <th style="text-align:center;">  Transaction Id </th>    
            <th  style="text-align:center;"> <?php echo $other_ids ?> </th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Candidate Name </th>    
            <th  style="text-align:center;"> <?php echo $stu_name ?> </th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Candidate Email </th>    
            <th  style="text-align:center;"><?php echo $stu_email ?> </th>
           </tr>
           <tr  >
            <tr  >
            <th style="text-align:center;"> Candidate Year </th>    
            <th  style="text-align:center;"> <?php echo $year ?> </th>
           </tr>
            <tr  >
            <th style="text-align:center;"> Candidate Contect </th>    
            <th  style="text-align:center;"> +91-<?php echo $stu_contect ?> </th>
           </tr>
          <tr>
            <th style="text-align:center;"> Transaction Date </th>    
            <th  style="text-align:center;"> <?php echo $other_fee_d ?> </th>
           </tr>
          <tr>
            <th style="text-align:center;"> Amount </th>    
            <th  style="text-align:center;"> <?php echo $stu_fee_other ?> </th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Payment Mode </th>    
            <th  style="text-align:center;"> <?php echo $other_m ?></th>
           </tr>
           <tr  >
            <th style="text-align:center;"> Payment Status </th>    
            <th  style="text-align:center;">  SUCCESS </th>
           </tr>

     </table>

       <br>

  <?php } ?>


  

  </div>
</div>

</body>


</html>
<?php } ?>