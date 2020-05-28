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
<title>Total Appointments</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/footer.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.js" type="text/javascript" ></script>
<script src="js/bootstrap.js" type="text/javascript" ></script>
<script src="js/validation.js" type="text/javascript"></script>
<style>
body
{
font-family:"Times New Roman";
color:#FFFFFF;
background-sizing:cover;
background-image:url('images/bg-2%20(2).jpg');
}
button
{
outline:none;
color:#FFFFFF;
background-color:#666666;
border:none;
border-radius:10px;
font-size:18px;
width:100px;
}
table
{
border-sizing:border-box;
outline:none;
text-align:center;
border:none;
border-radius:15px;
background:rgba(0,0,0,0.8);
margin-top:30px;
margin-bottom:100px;
}
h1
{
background-color:#000000;
border-radius:10px;
color:#FFFFFF;
padding:20px;
width:600px;
margin:auto;
margin-top:30px;
}
td
{
padding:15px;
}
#a td
{
background-color:#000000;
font-size:24px;
font-weight:bold;
padding:20px;
}
a
{
text-decoration:none;
}
tr
{
font-size:18px;
}
</style>
</head>

<body>
<?php include('navbar_admin.php'); ?>
<iframe src="admin_table.php" name="iframe_a"  style="height:100vH; width:100%; margin:auto;"></iframe>
<h2 align="center" style="color:red;"><?php     echo $a=@$_GET['msg'];     ?></h2>
<?php
include('admin_footer.php');
?>
</body>
</html>

