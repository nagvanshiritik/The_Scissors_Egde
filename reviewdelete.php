<?php
include('dbconfig.php'); 
$reviewdelete=$_GET['na'];
$que="delete from reviews where name='$reviewdelete'";
$run=mysqli_query($conn,$que);
if($run)
{
  header('location:admin_review.php?msg=Review deleted');
}
?>