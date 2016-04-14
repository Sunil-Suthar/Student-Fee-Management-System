
<?php
      
     //establish the connection to MySQL Database
	 
	 //$con = mysqli_connect("mysql12.000webhost.com","a2760892_suthar","sunil4455","a2760892_sunil");
	//$con = mysqli_connect("localhost","sunil","sunil2244","suthar");
	$con = mysqli_connect("localhost","root","","sfm");
	 
	 if(!$con){
	 	die("Connection Failed!:".mysqli_connect_error());
	 }
?>