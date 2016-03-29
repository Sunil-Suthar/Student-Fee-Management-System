
<?php  
  require('includes/connection.php');  //include connection file
 require'functions.php'; 
 
 //include function file
  //include 'includes/connection.php';
    if(!isset($_SESSION['user_email'])){
	
	  echo " <script> window.open('login.php?not_admin=You are not an Admin!!!','_self')</script>";
    }
    else{
  
?>
 
<!DOCTYPE html>

<html>
<head>
       <title>Add New Student</title>
                   <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
                        <script>tinymce.init({selector:'textarea'});</script>                 
</head>
<body bgcolor="#ededeb">

        <form action="student_add.php" method="post" enctype="multipart/form-data">
                <table  width="795"  border="2" align="center" bgcolor="#3195c9">
                         
                        <!-- Table Heading Section -->
                        <tr align="center">
                                <td colspan="12"><h2>Insert New Student</h2></td>
                        </tr>
                        
                        <!-- Product Name Section -->
                        <tr>
                                <td align="right"><b>Student ID:</b></td>
                                <td><input type="text" name="student_id" size="60" required /></td>
                        </tr>
                        <tr>
                                <td align="right"><b>Student Name:</b></td>
                                <td><input type="text" name="student_name" size="60" required /></td>
                        </tr>
                        <tr>
                                <td align="right"><b>Student Email:</b></td>
                                <td><input type="text" name="student_email" size="60" required /></td>
                        </tr>
                        
                        <!-- Product Category Section -->
                        <tr>
                                <td align="right"><b>Student Category1:</b></td>
                                <td>
                                        <select name="student_cat1">
                                        <option > Select Category</option>
                                        <option>GEN</option>
                                        <option>OBC</option>
                                        <option>SC/ST</option>
                                        </select>
                                </td>
                        </tr>
                        <tr>
                                <td align="right"><b>Student Category2:</b></td>
                                <td>
                                        <select name="student_cat2">
                                        <option > Select Category</option>
                                        <option>UG</option>
                                        <option>PG</option>
                                        </select>
                                </td>
                        </tr>
                        <tr>
                                <td align="right"><b>Admission Year :</b></td>
                                <td><input type="number" name="year" size="60" required /></td>
                        </tr>
                        <!-- Product Brand Section -->
                        <tr>
                                <td align="right"><b>Student Year:</b></td>
                                <td>
                                        <select name="student_year">
                                        <option > Select Year</option>
                                        <option>1st Year</option>
                                        <option>2nd year</option>
                                        <option>3rd Year</option>
                                        <option>4th year</option>
                                        </select>
                                
                                </td>
                        </tr>
                        
                        <!-- Product Image Section -->
                        <tr>
                                <td align="right"><b>Address :</b></td>
                                <td><input type="text" name="student_addr" size="60" required /></td>
                        </tr>
                        
                        <!-- Product Price Section -->
                        <tr>
                                <td align="right"><b>Mobile NO:</b></td>
                                <td>+91-<input type="number" name="student_contect" max="10"  required /></td>
                        </tr>

                        <tr>
                                <td align="right"><b>Password:</b></td>
                                <td><input type="password" name="student_pass"  required /></td>
                        </tr>
                        
                        <!-- Submit button -->
                        <tr align="center">
                                <td colspan="12"><input type="submit" name="insert_post" value="Add Student Now"  required /></td>
                        </tr>
                
                </table>      
        
        </form>
      
</body>
</html>
<?php } ?>