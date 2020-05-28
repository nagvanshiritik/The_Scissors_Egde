<?php 
$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
$db=mysqli_select_db($conn,"the_scissors_edge") or die(mysqli_error($conn));
?>