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
    <div qclass="container">
        <div class="row">
                        <form class="form" role="form" action=" " method="post" enctype="multipart/form-data">
                          <div class="form-group">
                
                                 <div class=" col-md-offset-3 col-md-2"> 
                                        <select name="select_cat" required>
                                        <option value = "" > Select Year</option>
                                        <option value = "All" >All</option>
                                        <option value = "UG 1st Year" >UG 1st Year</option>
                                        <option value = "UG 2nd Year" >UG 2nd Year</option>
                                        <option value = "UG 3rd Year" >UG 3rd Year</option>
                                        <option value = "UG 4th Year" >UG 4th Year</option>
                                        <option value = "PHD" >PHD</option>
                                        <option value = "M.TECH" >M.TECH</option>
                                        
                                        </select>
                                  </div>


                            <div class="col-md-offset-6 col-md-3">
                                   
                                   <input type="text" class="form-control" name="stu_name" placeholder="Student Name">
                                  </div>

                            </div><br><br>
                           <div class="form-group"> 
                                    <div class="col-md-offset-3 col-md-2">
                                <button type="submit" class="btn btn-default" name="insert_post" required >Display List</button>
                                    </div>
                           </div>
        </form>
</div>
        <br>
        
        <br>
<?php 
    //student_name LIKE '%$stu_name%'
 require('includes/connection.php');  //include connection file
 require'functions.php'; 
        //include 'includes/connection.php';
       // session_start();
    if(isset($_POST['insert_post']))
    {

      $sel_cat = strip_tags($_POST['select_cat']);
      $stu_name = strip_tags($_POST['stu_name']);    

    if($sel_cat == 'UG 1st Year'){
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

$get_pro = "SELECT*FROM student WHERE student_year = '1' AND student_cat2 = 'UG' AND student_name LIKE '%$stu_name%' ";
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
 

<?php 
} 
elseif($sel_cat == 'UG 2nd Year' ) 
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

$get_pro = "SELECT*FROM student WHERE student_year = '2'  AND student_cat2 = 'UG' AND student_name LIKE '%$stu_name%' ";
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
 

<?php } 
 
 elseif($sel_cat == 'UG 3rd Year' ) 
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

$get_pro = "SELECT*FROM student WHERE student_year = '3'  AND student_cat2 = 'UG' AND student_name LIKE '%$stu_name%' ";
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
 

<?php } 
 
  elseif($sel_cat == 'UG 4th Year' ) 
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

$get_pro = "SELECT*FROM student WHERE student_year = '4'  AND student_cat2 = 'UG' AND student_name LIKE '%$stu_name%' ";
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

<?php } 
  elseif($sel_cat == 'PHD' ) 
{

?>
<h2>List Of all PHD Students</h2>
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

$get_pro = "SELECT*FROM student WHERE student_cat2 = 'PHD' AND student_name LIKE '%$stu_name%'";
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
 

<?php } 
  elseif($sel_cat == 'M.TECH' ) 
{

?>
<h2>List Of all M.TECH Students</h2>
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

$get_pro = "SELECT*FROM student WHERE student_cat2 = 'M.TECH' AND student_name LIKE '%$stu_name%'";
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

$get_pro = "SELECT*FROM student WHERE student_name LIKE '%$stu_name%'";
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
 
<?php } 

?>  



<?php } ?>  
        </div>
</body>
</html>
<?php } ?> 