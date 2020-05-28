<?php 
session_start();
if(!isset($_SESSION['username']))
{
 header('location:admin_login.php?msg=You Must Login First');
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
$service=$_POST['service'];
$price=$_POST['price'];
$time=$_POST['time'];
$sql="INSERT INTO servicetable (service,price,timing) VALUES ('$service','$price','$time')";
mysqli_query($conn,$sql);
}
include('navbar_admin.php');
include('carousal.php');
include('admin_footer.php');
?>
</body>
</html>