<?php 
if(!isset($_SESSION['user_email'])){
	
	echo " <script> window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
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