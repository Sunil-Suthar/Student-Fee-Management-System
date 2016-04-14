<?php 
if(isset($_SESSION['user_email'])){
  
    echo " <script> window.open('index1.php?view_profile1','_self')</script>";
    }

    elseif(!isset($_SESSION['user_email1'])){
	
	  echo " <script> window.open('../index.php','_self')</script>";
    }
else{
	?>

<?php
      include("includes/connection.php");
	  if(isset($_GET['delete_pro'])){
		 
		$delete_id =$_GET['delete_pro'];
		
		$delete_pro = "DELETE FROM student WHERE student_id= '$delete_id'";
		
		$run_delete = mysqli_query($con, $delete_pro);
		
		if($run_delete){
			
			echo"<script> alert('Student has been deleted')</script>";
			
			//echo"<script>window.open('index.php?view_students','_parent')</script>";
			echo '<META  HTTP-EQUIV="Refresh" Content = "0.000001 ; URL = index.php?view_students">';
		}
		
	  }
?>
<?php } ?>