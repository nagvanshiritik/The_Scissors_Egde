<?php 
session_start();
if(!isset($_SESSION['username']))
{
 header('location:login.php?msg=You Must Login First');
}
?>
<?php
include('dbconfig.php'); 
$delp=$_GET['pc'];
$customer=$_SESSION['username'];
$que="delete from cart where product_code='$delp' and username='$customer'";
$run=mysqli_query($conn,$que);
if($run)
{
  header('location:cartitems.php?msg=Product deleted');
}
?>