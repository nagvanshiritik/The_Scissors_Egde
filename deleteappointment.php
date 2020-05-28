<?php
include('dbconfig.php'); 
$delappointment=$_GET['na'];
$que="delete from appointment where name='$delappointment'";
$run=mysqli_query($conn,$que);
if($run)
{
  header('location:admin_appointments.php?msg=Appointment deleted');
}
?>