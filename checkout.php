<?php 
session_start();
if(!isset($_SESSION['username']))
{
 header('location:login.php?msg=You Must Login First');
$u=$_SESSION['username'];
}
?>
<!doctype html>
<html lang="en">
<head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="images/Screenshot (75).png">
<title>payment</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/footer.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.js" type="text/javascript" ></script>
<script src="js/bootstrap.js" type="text/javascript" ></script>
<script src="js/validation.js" type="text/javascript"></script>
<style>
body
{
background-image:url('images/bg-2.jpg');
background-size:cover;
font-family:"Times New Roman";
}
#pay a
{
color:#FFFFFF;
}
#pay
{
width:100%;
outline:none;
border:none;
background-color:#000000;
height:50px;
border-radius:10px;
}
#pay:hover
{
box-shadow: 0 0 25px 0 black;
}

#paybox
{
max-width:500px;
padding:40px;
margin:auto;
background-color:#FFFFFF;
border-radius:10px;
box-shadow:0 0 50px 0 black;
}
</style>
</head>
<body>
<?php 
include('navbar_login.php');
?>
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
}
?>

<div class="container" style="margin-top:100px; margin-bottom:100px;"> 
<div id="paybox">
	<div class="row">
        	<h4 style="margin:auto; margin-bottom:30px; color:#0099FF;">Complete Your Payment!</h4>
     </div>
     <div class="row">
            <div class="jumbotron" style="width:100%;">
            	<h5 align="center"><b>Amount Payable: Rs.</b><?php echo $cost; ?></h5>
                <h5 align="center"><b>Name:&nbsp;</b><?php echo $name; ?></h5>
                <h5 align="center"><b>Service Type: &nbsp;</b><?php echo $service; ?></h5>
                <h5 align="center"><b>Time: &nbsp;</b><?php echo $time; ?></h5>
            </div>
     </div>
     <div class="row">
                 <?php echo "<button id=pay><a href='TxnTest.php?c=$cost'>Pay Now</a></button>"; ?>
     </div>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>