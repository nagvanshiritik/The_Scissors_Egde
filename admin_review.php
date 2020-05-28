<?php 
session_start();
if(!isset($_SESSION['username']))
{
 header('location:admin_login.php?msg=You Must Login First');
}
?>
<?php
include('dbconfig.php');
?>
<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="images/Screenshot (75).png">
<title>Recent Reviews</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/footer.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.js" type="text/javascript" ></script>
<script src="js/bootstrap.js" type="text/javascript" ></script>
<script src="js/validation.js" type="text/javascript"></script>
<style>
body
{
font-family:Times New Roman;
color:#FFFFFF;
background-image:url(images/bg-2.jpg);
}
body #wrap
{
font-family:Times New Roman;
color:#FFFFFF;
}
p
{
border:1px dotted #FFFFFF;
font-size:24px;
background-color:rgba(0,0,0,0.6);
border-radius:10px;
padding:20px;
margin-top:20px;
}
#wrap
{
border-sizing:border-box;
background-color:rgba(0,0,0,0.8);
border-radius:10px;
padding:40px;
margin-top:8px;
margin-bottom:10px;
outline:none;
border:1px dotted #FFFFFF;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
}
#r
{
background-color:#FFFF00;
color:#000000;
padding:10px;
width:100px;
font-weight:bold;
border-radius:15px;
}
span
{
background-color:#FFFF00;
color:#000000;
padding:10px;
border-radius:15px;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;

}

.sidenav a:hover{
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>

<body>
<?php include('navbar_admin.php'); ?>
<h1 align="center" style="color:#FFFFFF; font-family:Times New Roman; background-color:#000000; padding:10px; border-top:1px solid #FFFFFF;"><b>Recent Reviews</b></h1>
<?php 
$que="Select * from reviews";
$run=mysqli_query($conn,$que);
while($rec=mysqli_fetch_array($run))
{
    echo "<div class=container-fluid id=wrap>
	          <h3>&nbsp;".$rec['name']."</h3>
			  <h6>&nbsp;Customer</h6>
			  <h6 id=r>Rating:&nbsp;&nbsp;&nbsp;".$rec['rating']."</h6>
			  <p>Reviews:<br/>".$rec['reviews']."</p>
			  <a href='reviewdelete.php?na=$rec[name]'><button>Delete</button></a>
		  </div>";
}
?>
<h2 align="center" style="color:red;"><?php     echo $a=@$_GET['msg'];     ?></h2>
<?php
include('admin_footer.php');
?>
</body>
</html>