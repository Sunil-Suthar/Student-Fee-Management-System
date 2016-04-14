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
<html lang="en">
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
	 <form class="form-horizontal" role="form" action=" " method="post" enctype="multipart/form-data">
	  <h2 style="text-align:center;">M.TECH Fee Structure</h2>
	     <table class="table table-bordered">
	    
	      
	      <tr  bgcolor="skyblue">
	      <div class="col-md-2">  
	        <th   style="text-align:center;"> Category </th> 
	        </div>
	        <div class="col-md-2">    
	        <th   style="text-align:center;">2011</th>
	        </div>
	        <div class="col-md-2"> 
            <th   style="text-align:center;">2012</th>
	        </div>
	        <div class="col-md-2"> 
	        <th  style="text-align:center;">2013</th>
	        </div>
	        <div class="col-md-2"> 
	        <th    style="text-align:center;">2014</th>
	        </div>
	        <div class="col-md-2"> 
	        <th   style="text-align:center;">2015</th>
	        </div>    
	      </tr>		

	      
	     <!-- <tr  align="center"  > 
     <th  style="text-align:center;"> Category </th>
      <td  > <input type="tel"  size = "10" name="student_contect"> </td>
      <td> <input type="tel"  size = "10" name="student_contect"> </td>
      <td> <input type="tel"   size = "10" name="student_contect"> </td>
      <td> <input type="tel"  size = "10" name="student_contect"> </td>
     </tr> -->
	     
<?php
	//include('includes/connection.php');
require('includes/connection.php');
	require'functions.php'; 

	$get_pro1 = "SELECT*FROM mtfeestructure WHERE catagory = 'GEN'";
	$run_pro1 = mysqli_query($con,$get_pro1);
	$row_pro1 = mysqli_fetch_array($run_pro1);
	$pro_11 = $row_pro1['Y_2011'];
	$pro_12 = $row_pro1['Y_2012'];
	$pro_13 = $row_pro1['Y_2013'];
	$pro_14 = $row_pro1['Y_2014'];
	$pro_15 = $row_pro1['Y_2015'];

	$get_pro2 = "SELECT*FROM mtfeestructure WHERE catagory = 'OBC'";
	$run_pro2 = mysqli_query($con,$get_pro2);
	$row_pro2 = mysqli_fetch_array($run_pro2);
	$pro_21 = $row_pro2['Y_2011'];
	$pro_22 = $row_pro2['Y_2012'];
	$pro_23 = $row_pro2['Y_2013'];
	$pro_24 = $row_pro2['Y_2014'];
	$pro_25 = $row_pro2['Y_2015'];

	$get_pro3 = "SELECT*FROM mtfeestructure WHERE catagory = 'SC/ST'";
	$run_pro3 = mysqli_query($con,$get_pro3);
	$row_pro3 = mysqli_fetch_array($run_pro3);
	$pro_31 = $row_pro3['Y_2011'];
	$pro_32 = $row_pro3['Y_2012'];
	$pro_33 = $row_pro3['Y_2013'];
	$pro_34 = $row_pro3['Y_2014'];
	$pro_35 = $row_pro3['Y_2015'];

?>                
	<!--<th bgcolor="skyblue" style="text-align:center;" ><?php //echo $pro_id; ?> </th>
	<td><?php //echo $pro_1; ?> </td>
	<td><?php //echo $pro_2; ?> </td>
	<td><?php //echo $pro_3; ?> </td>
	<td><?php //echo $pro_4; ?> </td>
	<td><?php //echo $pro_5; ?> </td>
-->
   <tr  >
	      	<div class="col-md-2"> 
	        <th   bgcolor="skyblue" style="text-align:center;"> GEN</th>    
	        </div>
	        <div class="col-md-2"> 
	        <td   style="text-align:center;"><input type="number" size = "10" name="input_11" min = "0" max = "9999999999" value= "<?php echo $pro_11 ;?>" ></td>
	        </div>
	        <div class="col-md-2"> 
	        <td   style="text-align:center;"><input type="number"  size = "10" name="input_12" min = "0" max = "9999999999" value= "<?php echo $pro_12 ;?>" ></td>
	        </div>
	        <div class="col-md-2"> 
	        <td  style="text-align:center;"><input type="number"  size = "10" name="input_13" min = "0" max = "9999999999" value= "<?php echo $pro_13 ;?>" ></td>
	        </div>
	        <div class="col-md-2"> 
	        <td    style="text-align:center;"><input type="number"  size = "10" name="input_14" min = "0" max = "9999999999" value= "<?php echo $pro_14 ;?>"></td>
	        </div>
	        <div class="col-md-2"> 
	        <td   style="text-align:center;"><input type="number"  size = "10" name="input_15" min = "0" max = "9999999999" value= "<?php echo $pro_15 ;?>"></td>
	        </div>    
	      </tr>	

	      <tr  >
	      	<div class="col-md-2"> 
	        <th   bgcolor="skyblue" style="text-align:center;"> OBC</th>    
	        </div>
	        <div class="col-md-2"> 
	        <td   style="text-align:center;"><input type="number" size = "10" name="input_21" min = "0" max = "9999999999" value= "<?php echo $pro_21 ;?>" ></td>
	        </div>
	        <div class="col-md-2"> 
	        <td   style="text-align:center;"><input type="number"  size = "10" name="input_22" min = "0" max = "9999999999" value= "<?php echo $pro_22 ;?>" ></td>
	        </div>
	        <div class="col-md-2"> 
	        <td  style="text-align:center;"><input type="number"  size = "10" name="input_23" min = "0" max = "9999999999" value= "<?php echo $pro_23 ;?>" ></td>
	        </div>
	        <div class="col-md-2"> 
	        <td    style="text-align:center;"><input type="number"  size = "10" name="input_24" min = "0" max = "9999999999" value= "<?php echo $pro_24 ;?>"></td>
	        </div>
	        <div class="col-md-2"> 
	        <td   style="text-align:center;"><input type="number"  size = "10" name="input_25" min = "0" max = "9999999999" value= "<?php echo $pro_25 ;?>"></td>
	        </div>   
	      </tr>	

	      <tr  >
	      	<div class="col-md-2"> 
	        <th   bgcolor="skyblue" style="text-align:center;"> SC/ST</th>    
	        </div>
	        <div class="col-md-2"> 
	        <td   style="text-align:center;"><input type="number" size = "10" name="input_31" min = "0" max = "9999999999" value= "<?php echo $pro_31 ;?>" ></td>
	        </div>
	        <div class="col-md-2"> 
	        <td   style="text-align:center;"><input type="number"  size = "10" name="input_32" min = "0" max = "9999999999" value= "<?php echo $pro_32 ;?>" ></td>
	        </div>
	        <div class="col-md-2"> 
	        <td  style="text-align:center;"><input type="number"  size = "10" name="input_33" min = "0" max = "9999999999" value= "<?php echo $pro_33;?>" ></td>
	        </div>
	        <div class="col-md-2"> 
	        <td    style="text-align:center;"><input type="number"  size = "10" name="input_34" min = "0" max = "9999999999" value= "<?php echo $pro_34 ;?>"></td>
	        </div>
	        <div class="col-md-2"> 
	        <td   style="text-align:center;"><input type="number"  size = "10" name="input_35" min = "0" max = "9999999999" value= "<?php echo $pro_35 ;?>"></td>
	        </div>     
	      </tr>	
	<!--<td><img src="product_images/<?php// echo $pro_image; ?>" width="60" height="60"  /></td>
	<td><?php //echo $pro_price; ?> </td>
	<td><a href = "index.php?edit_pro=<?php //echo $pro_id; ?>">Edit</a></td>
	<td><a href = "delete_pro.php?delete_pro=<?php //echo $pro_id;?>">Delete</a></td>-->
	                 

	    
   		 <tr align="center">
             <td colspan="12"><input type="submit" class="btn btn-primary" name="insert_post" value="Update Fees"  required /></td>
         </tr>
  

	</table>
 	
</form>

    
</div>

</body>
</html>

<?php
  
	  if(isset($_POST['insert_post']))
			{
			
					//getting the text data from the fields
					$ug_11 = $_POST['input_11'];
					//echo $ug_11;
					$ug_12 = $_POST['input_12'];
					//echo $ug_11;
					$ug_13 = $_POST['input_13'];
					$ug_14 = $_POST['input_14'];
					$ug_15 = $_POST['input_15'];
					
					$ug_21 = $_POST['input_21'];
					$ug_22 = $_POST['input_22'];
					$ug_23 = $_POST['input_23'];
					$ug_24 = $_POST['input_24'];
					$ug_25 = $_POST['input_25'];
					
					$ug_31 = $_POST['input_31'];
					$ug_32 = $_POST['input_32'];
					$ug_33 = $_POST['input_33'];
					$ug_34 = $_POST['input_34'];
					$ug_35 = $_POST['input_35'];
					
					
					$update_fee1= "UPDATE mtfeestructure SET Y_2011 = '$ug_11', Y_2012 = '$ug_12',Y_2013 = '$ug_13', Y_2014 = '$ug_14', Y_2015 = '$ug_15' WHERE catagory='GEN'";  
					//echo $update_fee1;
					$update_fee2= "UPDATE mtfeestructure SET Y_2011 = '$ug_21', Y_2012 = '$ug_22',Y_2013 = '$ug_23', Y_2014 = '$ug_24', Y_2015 = '$ug_25' WHERE catagory='OBC'";
					
					$update_fee3= "UPDATE mtfeestructure SET Y_2011 = '$ug_31', Y_2012 = '$ug_32',Y_2013 = '$ug_33', Y_2014 = '$ug_34', Y_2015 = '$ug_35' WHERE catagory='SC/ST'";
				
					$fee_updat1 = mysqli_query($con, $update_fee1); 
					$fee_updat2 = mysqli_query($con, $update_fee2); 
					$fee_updat3 = mysqli_query($con, $update_fee3); 
					//echo  $fee_updat1 ;
					//echo  $fee_updat2 ;
					//echo  $fee_updat3 ;
					if($fee_updat1){
						if ($fee_updat2){
							if($fee_updat3){
								echo "<script> alert('M.TECH Fees has been Updated')</script>";
								echo '<META  HTTP-EQUIV="Refresh" Content = "0.0000001 ; URL = index.php?fee_structure">';
							}
						}
					}	
					 
					//if ($fee_updat1 and $fee_updat2 and $fee_updat3) {
					//		echo "<script> alert('UG Fees has been Updated')</script>";
					//		echo '<META  HTTP-EQUIV="Refresh" Content = "0.0000001 ; URL = index.php?fee_structure">';
					//	}	
					
	  				}
	 				// }
					

	?>

<?php } ?>