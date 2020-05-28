<?php
include('dbconfig.php'); 
$aadhaar=$_GET['ac'];
$que="delete from employees where aadhar='$aadhaar'";
$run=mysqli_query($conn,$que);
if($run)
{
  header('location:admin_employees.php?msg=Employee Removed');
}
?>