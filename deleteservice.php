<?php
include('dbconfig.php'); 
$delservice=$_GET['st'];
$que="delete from servicetable where service='$delservice'";
$run=mysqli_query($conn,$que);
if($run)
{
  header('location:pricetable.php?msg=Service deleted');
}
?>