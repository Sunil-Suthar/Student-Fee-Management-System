<?php 
if(!isset($_SESSION['user_email'])){
	
	echo " <script> window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
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
      <form class="form" role="form" action=" " method="post" enctype="multipart/form-data">
                          <div class="form-group">
                                 <div class="col-md-offset-4 col-md-6"> 
                                        <select name="select_cat" required>
                                        <option > Select Year</option>
                                        <option>All</option>
                                        <option>1st Year</option>
                                        <option>2nd Year</option>
                                        <option>3rd Year</option>
                                        <option>4th Year</option>
                                        <option>PG</option>
                                        
                                        </select>
                                  </div>
                           </div><br><br>
                         <div class="form-group"> 
                                    <div class="col-md-offset-4 col-md-6">
                                <button type="submit" class="btn btn-default" name="insert_post" required >Display List</button>
                                    </div>
                           </div>
        </form>

        <br>
        <br>
<?php 
 require('includes/connection.php');  //include connection file
 require'functions.php'; 
        //include 'includes/connection.php';
       // session_start();
    if(isset($_POST['insert_post']))
    {

      $sel_cat = strip_tags($_POST['select_cat']);

    if($sel_cat == '1st Year'){
?>
  <h2>List Of 1st Year Students</h2>
        <table class="table table-bordered">
        <tr>
        <th>S.N </th>    
        <th>Student ID</th>
        <th>Name</th>
        <th>Category</th>
        <th> UG/PG </th>
        <th>Year</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>                 
      </tr>
    <?php
include('includes/connection.php');

$get_pro = "SELECT*FROM student WHERE student_year = '1' ";
$run_pro = mysqli_query($con,$get_pro);
$i = 0;
while($row_pro = mysqli_fetch_array($run_pro)){
	
	$stu_id = $row_pro['student_id'];
	$stu_name = $row_pro['student_name'];
	$stu_cat1 = $row_pro['student_cat1'];
  $stu_cat2 = $row_pro['student_cat2'];
	$stu_year = $row_pro['student_year'];
	$i++;
?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $stu_id; ?> </td>
<td><?php echo $stu_name; ?> </td>
<td><?php echo $stu_cat1 ?> </td>
<td><?php echo $stu_cat2 ?> </td>
<td><?php echo $stu_year ?> </td>
<td><a href = "index.php?view_pro=<?php echo $stu_id; ?>">View</a></td>
<td><a href = "index.php?edit_pro=<?php echo $stu_id; ?>">Edit</a></td>
<td><a href = "index.php?delete_pro=<?php echo $stu_id;?>">Delete</a></td>
</tr>

<?php } ?>        

</table>
 </div>
</body>
</html>

<?php 
} 
elseif($sel_cat == '2nd Year' ) 
{

?>
<h2>List Of 2nd Year Students</h2>
        <table class="table table-bordered">
        <tr>
        <th>S.N </th>    
        <th>Student ID</th>
        <th>Name</th>
        <th>Category</th>
        <th> UG/PG </th>
        <th>Year</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>                 
      </tr>
    <?php
include('includes/connection.php');

$get_pro = "SELECT*FROM student WHERE student_year = '2'";
$run_pro = mysqli_query($con,$get_pro);
$i = 0;
while($row_pro = mysqli_fetch_array($run_pro)){
  
  $stu_id = $row_pro['student_id'];
  $stu_name = $row_pro['student_name'];
  $stu_cat1 = $row_pro['student_cat1'];
  $stu_cat2 = $row_pro['student_cat2'];
  $stu_year = $row_pro['student_year'];
  $i++;
?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $stu_id; ?> </td>
<td><?php echo $stu_name; ?> </td>
<td><?php echo $stu_cat1 ?> </td>
<td><?php echo $stu_cat2 ?> </td>
<td><?php echo $stu_year ?> </td>
<td><a href = "index.php?view_pro=<?php echo $stu_id; ?>">View</a></td>
<td><a href = "index.php?edit_pro=<?php echo $stu_id; ?>">Edit</a></td>
<td><a href = "index.php?delete_pro=<?php echo $stu_id;?>">Delete</a></td>
</tr>

<?php } ?>        

</table>
 </div>
</body>
</html>

<?php } 
 
 elseif($sel_cat == '3rd Year' ) 
{

?>
<h2>List Of 3rd Year Students</h2>
        <table class="table table-bordered">
        <tr>
        <th>S.N </th>    
        <th>Student ID</th>
        <th>Name</th>
        <th>Category</th>
        <th> UG/PG </th>
        <th>Year</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>                 
      </tr>
    <?php
include('includes/connection.php');

$get_pro = "SELECT*FROM student WHERE student_year = '3' ";
$run_pro = mysqli_query($con,$get_pro);
$i = 0;
while($row_pro = mysqli_fetch_array($run_pro)){
  
  $stu_id = $row_pro['student_id'];
  $stu_name = $row_pro['student_name'];
  $stu_cat1 = $row_pro['student_cat1'];
  $stu_cat2 = $row_pro['student_cat2'];
  $stu_year = $row_pro['student_year'];
  $i++;
?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $stu_id; ?> </td>
<td><?php echo $stu_name; ?> </td>
<td><?php echo $stu_cat1 ?> </td>
<td><?php echo $stu_cat2 ?> </td>
<td><?php echo $stu_year ?> </td>
<td><a href = "index.php?view_pro=<?php echo $stu_id; ?>">View</a></td>
<td><a href = "index.php?edit_pro=<?php echo $stu_id; ?>">Edit</a></td>
<td><a href = "index.php?delete_pro=<?php echo $stu_id;?>">Delete</a></td>
</tr>

<?php } ?>        

</table>
 </div>
</body>
</html>

<?php } 
 
  elseif($sel_cat == '4th Year' ) 
{

?>
<h2>List Of 4th Year Students</h2>
        <table class="table table-bordered">
        <tr>
        <th>S.N </th>    
        <th>Student ID</th>
        <th>Name</th>
        <th>Category</th>
        <th> UG/PG </th>
        <th>Year</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>                 
      </tr>
    <?php
include('includes/connection.php');

$get_pro = "SELECT*FROM student WHERE student_year = '4'";
$run_pro = mysqli_query($con,$get_pro);
$i = 0;
while($row_pro = mysqli_fetch_array($run_pro)){
  
  $stu_id = $row_pro['student_id'];
  $stu_name = $row_pro['student_name'];
  $stu_cat1 = $row_pro['student_cat1'];
  $stu_cat2 = $row_pro['student_cat2'];
  $stu_year = $row_pro['student_year'];
  $i++;
?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $stu_id; ?> </td>
<td><?php echo $stu_name; ?> </td>
<td><?php echo $stu_cat1 ?> </td>
<td><?php echo $stu_cat2 ?> </td>
<td><?php echo $stu_year ?> </td>
<td><a href = "index.php?view_pro=<?php echo $stu_id; ?>">View</a></td>
<td><a href = "index.php?edit_pro=<?php echo $stu_id; ?>">Edit</a></td>
<td><a href = "index.php?delete_pro=<?php echo $stu_id;?>">Delete</a></td>
</tr>

<?php } ?>        

</table>
 </div>
</body>
</html>

<?php } 
  elseif($sel_cat == 'PG' ) 
{

?>
<h2>List Of all PG Students</h2>
        <table class="table table-bordered">
        <tr>
        <th>S.N </th>    
        <th>Student ID</th>
        <th>Name</th>
        <th>Category</th>
        <th> UG/PG </th>
        <th>Year</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>                 
      </tr>
    <?php
include('includes/connection.php');

$get_pro = "SELECT*FROM student WHERE student_cat2 = 'PG'";
$run_pro = mysqli_query($con,$get_pro);
$i = 0;
while($row_pro = mysqli_fetch_array($run_pro)){
  
  $stu_id = $row_pro['student_id'];
  $stu_name = $row_pro['student_name'];
  $stu_cat1 = $row_pro['student_cat1'];
  $stu_cat2 = $row_pro['student_cat2'];
  $stu_year = $row_pro['student_year'];
  $i++;
?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $stu_id; ?> </td>
<td><?php echo $stu_name; ?> </td>
<td><?php echo $stu_cat1 ?> </td>
<td><?php echo $stu_cat2 ?> </td>
<td><?php echo $stu_year ?> </td>
<td><a href = "index.php?view_pro=<?php echo $stu_id; ?>">View</a></td>
<td><a href = "index.php?edit_pro=<?php echo $stu_id; ?>">Edit</a></td>
<td><a href = "index.php?delete_pro=<?php echo $stu_id;?>">Delete</a></td>
</tr>

<?php } ?>        

</table>
 </div>
</body>
</html>

<?php } 

  elseif($sel_cat == 'All' ) 
{

?>
<h2>List Of all Students</h2>
        <table class="table table-bordered">
        <tr>
        <th>S.N </th>    
        <th>Student ID</th>
        <th>Name</th>
        <th>Category</th>
        <th> UG/PG </th>
        <th>Year</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>                 
      </tr>
    <?php
include('includes/connection.php');

$get_pro = "SELECT*FROM student";
$run_pro = mysqli_query($con,$get_pro);
$i = 0;
while($row_pro = mysqli_fetch_array($run_pro)){
  
  $stu_id = $row_pro['student_id'];
  $stu_name = $row_pro['student_name'];
  $stu_cat1 = $row_pro['student_cat1'];
  $stu_cat2 = $row_pro['student_cat2'];
  $stu_year = $row_pro['student_year'];
  $i++;
?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $stu_id; ?> </td>
<td><?php echo $stu_name; ?> </td>
<td><?php echo $stu_cat1 ?> </td>
<td><?php echo $stu_cat2 ?> </td>
<td><?php echo $stu_year ?> </td>
<td><a href = "index.php?view_pro=<?php echo $stu_id; ?>">View</a></td>
<td><a href = "index.php?edit_pro=<?php echo $stu_id; ?>">Edit</a></td>
<td><a href = "index.php?delete_pro=<?php echo $stu_id;?>">Delete</a></td>
</tr>

<?php } ?>        

</table>
 </div>
</body>
</html>

<?php } 


?>  






<?php } ?>  
<?php } ?> 