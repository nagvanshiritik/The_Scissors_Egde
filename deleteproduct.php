<?php
include('dbconfig.php'); 
$delp=$_GET['st'];
$que="delete from products where product_code='$delp'";
$run=mysqli_query($conn,$que);
if($run)
{
  header('location:after_admin.php?msg=Product deleted');
}
?>