<?php
include('dbconfig.php'); 
$blogdelete=$_GET['n'];
$que="delete from blog where name='$blogdelete'";
$run=mysqli_query($conn,$que);
if($run)
{
  header('location:admin_blog.php?msg=Blog deleted');
}
?>