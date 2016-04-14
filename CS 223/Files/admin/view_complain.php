<?php 
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
  <title>Fee Structure</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head> 
<body>
    <div class="container">
      

  <h2>List Of All Complain</h2>
        <table class="table table-bordered">
        <tr>
        <th>S.N </th>    
        <th>Student ID</th>
        <th>Name</th>
        <th>Email</th>
        <th> UG/PG </th>
        <th>Year</th>
        
        <th>Complain Subject</th>
        <th>Complaint Status</th>  
        <th>View</th>              
      </tr>
    <?php
include('includes/connection.php');

$get_pro = "SELECT*FROM complain 
            ORDER BY (CASE comp_status
            WHEN 'PENDING'   THEN 2
            ELSE 1 END) ASC , comp_time ASC ;";
$run_pro = mysqli_query($con,$get_pro);
$i = 0;
while($row_pro = mysqli_fetch_array($run_pro)){
  
  $stu_id = $row_pro['student_id'];
  $stu_name = $row_pro['student_name'];
   $stu_email = $row_pro['student_email'];
  $stu_cat2 = $row_pro['student_cat2'];
  $stu_year = $row_pro['student_year'];
  $comp_sub = $row_pro['complain_sub'];
  $comp_status = $row_pro['comp_status'];
  $i++;
?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $stu_id; ?> </td>
<td><?php echo $stu_name; ?> </td>
<td><?php echo $stu_email; ?> </td>
<td><?php echo $stu_cat2 ?> </td>
<td><?php echo $stu_year ?> </td>
<td><?php echo $comp_sub ?> </td>
<td> <?php if ($comp_status == 'PENDING') {
  ?> PENDING <?php 
}
else{
  ?> Approved By <?php echo $comp_status; 
  } ?></td>
<td><a href = "index.php?view_comp=<?php echo $stu_id;?> & view_sub=<?php echo $comp_sub; ?>">View</a></td>
</tr>

<?php } ?>        

</table>
 </div>
</body>
</html>

<?php 
} 
?>
