<?php session_start(); ?>
<!DOCTYPE html>

<head>
 
  <title>Admin Login Profile</title>
  <link rel="stylesheet" href="styles/login_style.css" media="all">
  <script src="js/login_script.js"> </script>
  
</head>

<body>

<span href="#" class="button" id="toggle-login">Log in</span>

<div id="login">
  <div id="triangle"></div>
  <h2 style="color:#FFF; text-align:center;"><?php echo @$_GET['not_admin']; ?> </h2>
  <h2 style="color:#FFF; text-align:center;"><?php echo @$_GET['logged_out']; ?> </h2>
  <h1>Admin Login</h1>
  <form method="post" action="login.php">
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
		 
		 $sel_user = "SELECT*FROM admins WHERE admin_email = '$email' AND admin_pass ='$pass'";
		 $run_user = mysqli_query($con, $sel_user);
		 
		 $check_user = mysqli_num_rows($run_user);
		 
		 if($check_user ==0){
			 
			 echo "<script> alert('Password or Email is wrong, try again!')</script>";
			 
			}
			else{
				$_SESSION['user_email'] = $email;
				
				//echo "<script> window.open('index.php?logged_in= You have successfully logged in','_parent')</script>";
                echo '<META  HTTP-EQUIV="Refresh" Content = "0.0001 ; URL = index.php?view_profile">';
				//echo "<script> window.open('index.php','_parent')</script>";
			}
	 }
?>
		 
		 