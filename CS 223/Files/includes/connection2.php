
<?php
      
     //establish the connection to MySQL Database
	 
	 $con = mysqli_connect("mysql12.000webhost.com","a2760892_suthar","sunil4455","a2760892_sunil");
	 
	 if(!$con){
	 	die("Connection Failed!:".mysqli_connect_error());
	 }
?>