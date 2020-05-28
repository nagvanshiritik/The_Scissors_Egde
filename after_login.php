<?php 
session_start();
if(!isset($_SESSION['username']))
{
 header('location:login.php?msg=You Must Login First');
}
?>
<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="images/Screenshot (75).png">
<title>The Scissor's Edge</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/footer.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.js" type="text/javascript" ></script>
<script src="js/bootstrap.js" type="text/javascript" ></script>
</head>
<body>
<?php
include('dbconfig.php');
if(isset($_POST['Submit']))
{
$user=$_SESSION['username'];
$name=$_POST['name'];
$service=$_POST['service'];
$gender=$_POST['gender'];
$time=$_POST['time'];
$address=$_POST['add'];
$pincode=$_POST['pin'];
$payment=$_POST['payment'];

$que="Select price from servicetable where service='$service' ";
$run=mysqli_query($conn,$que);
while($rec=mysqli_fetch_array($run))
{
			  $cost=$rec['price'];
}

$sql="INSERT INTO appointment(name,service_type,gender,time,address,pincode,payment_type,username,cost) values('$name','$service','$gender','$time','$address','$pincode','$payment','$user','$cost')";
mysqli_query($conn,$sql);
if($payment=='Inhand cash')
{
header('location:slot.php');
}
else
{
header('location:checkout.php?msg=$rec[price]');
}
}
?>
<?php
include('navbar_login.php');
include('carousal.php');
include('login_footer.php');
?>
</body>
</html>
