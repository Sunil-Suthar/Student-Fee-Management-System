
<?php require('includes/connection.php');  //include connection file ?>

<?php

// //The strip_tags() function strips a string from HTML, XML, and PHP tags.

//The mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement.

function filterdata($data){
	 
          global $con;
	
	      $data = strip_tags(mysqli_real_escape_string($con,$data));
	
	      return $data;
}

//To check if query is confirmed or not

function confirm_query($results){ 
   
    if(!$results){
		
       die('Database query Fail:'. mysqli_connect_error());
	
	}
}