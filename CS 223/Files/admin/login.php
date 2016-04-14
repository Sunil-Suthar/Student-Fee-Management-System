<?php session_start(); ?>
<?php
//$role = $_SESSION['user_role'] ;

if(isset($_SESSION['user_email1'])){
	
	echo " <script> window.open('index.php?view_profile','_self')</script>";
}
elseif (isset($_SESSION['user_email'])) {
	echo " <script> window.open('index1.php?view_profile1','_self')</script>";
}

else{
	include('includes/connection.php');

	if (isset($_GET['User'])) {
		$get_user = $_GET['User'];
	
	}
	 
		
 		//echo $get_user;
?>

<!DOCTYPE html>

<head>
 
  <title> <?php echo $get_user?> Login Profile</title>
  <link rel="stylesheet" href="styles/login_style.css" media="all">
  <script src="js/login_script.js"> </script>
  
</head>

<body>

<span href="#" class="button" id="toggle-login">Log in</span>

<div id="login">
  <div id="triangle"></div>
  <h2 style="color:#FFF; text-align:center;"><?php echo @$_GET['not_admin']; ?> </h2>
  <h2 style="color:#FFF; text-align:center;"><?php echo @$_GET['logged_out']; ?> </h2>
  <h1>  <?php echo $get_user?> Login</h1>
  <form method="post" action=" ">
    <input type="email" placeholder="Email" name="email" />
    <input type="password" placeholder="Password" name="password" />
    <input type="submit" value="Log in" name="login" /> 
  </form>
</div>

</body>
</html>

<?php
  
 include('includes/connection.php');
 
     if(isset($_POST['login'])){
		
		$email = mysqli_real_escape_string($con, $_POST['email']);
		 $pass = mysqli_real_escape_string($con, $_POST['password']);
		 
	   if($get_user == "Admin")	{ 

		 $sel_user = "SELECT*FROM admins WHERE admin_email = '$email' AND admin_pass ='$pass'";
		 $run_user = mysqli_query($con, $sel_user);
		 
		 $check_user = mysqli_num_rows($run_user);
		 
		 if($check_user ==0){
			 
			 echo "<script> alert('Password or Email is wrong, try again!')</script>";
			 
			}
			else{
				$_SESSION['user_email1'] = $email;
				$_SESSION['user_role'] = "admin";
				
				//echo "<script> window.open('index.php?logged_in= You have successfully logged in','_parent')</script>";
                echo '<META  HTTP-EQUIV="Refresh" Content = "0.00001 ; URL = index.php?view_profile">';
				//echo "<script> window.open('index.php','_parent')</script>";
	
			}
			}
			
		else{
			$sel_user = "SELECT*FROM student WHERE student_email = '$email' AND student_pass ='$pass'";
		 $run_user = mysqli_query($con, $sel_user);
		 
		 $check_user = mysqli_num_rows($run_user);
		 
		 if($check_user ==0){
			 
			 echo "<script> alert('Password or Email is wrong, try again!')</script>";
			 
			 
			}
			else{
				$_SESSION['user_email'] = $email;
				
				//echo "<script> window.open('index.php?logged_in= You have successfully logged in','_parent')</script>";
                echo '<META  HTTP-EQUIV="Refresh" Content = "0.000001 ; URL = index1.php?view_profile1">';
				//echo "<script> window.open('index.php','_parent')</script>";
			}
			}	
	 }

}
?>
		 
		 
