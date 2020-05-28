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
<title>Blog</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/footer.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.js" type="text/javascript" ></script>
<script src="js/bootstrap.js" type="text/javascript" ></script>
<script src="js/validation.js" type="text/javascript"></script>
<style>
p
{
border:1px dotted #FFFFFF;
font-size:24px;
background-color:rgba(0,0,0,0.6);
border-radius:10px;
padding:20px;
}
body
{
background-image:url('images/bg-2.jpg');
font-family:"Times New Roman";
}
.col-lg-10
{
border-radius:5px;
}
#wrap
{
border-radius:10px;
padding:40px;
margin:10px;
border:1px dotted #FFFFFF;
}
input[type=button]
{
margin-top:10px;
width:280px;
color:#FFFFFF;
background:rgba(0,0,0,0.8);
outline:none;
padding:10px;
border-radius:10px;
font-weight:bold;
font-family:Times New Roman;
border:1px dotted #FFFFFF;
}
</style>
</head>

<body style="color:#FFFFFF;">
<?php include('navbar_admin.php'); ?>
<h1 align="center" style="color:#FFFFFF; background-color:#000000; padding:10px; margin-top:1px;"><b>Recent Blog's</b></h1>
<div class="container-fluid">
<div class="row">
<div class="col-lg-2">
</div>
<div class="col-lg-10">
<?php 
$que="Select * from blog";
$run=mysqli_query($conn,$que);
while($rec=mysqli_fetch_array($run))
{
	echo "<div class=container-fluid style=background-color:rgba(0,0,0,0.8); id=wrap>
	           <h3>".$rec['name']."</h3>
			   <h6>".$rec['profession']."</h6>
			   <h6>".$rec['contact']."</h6>
			   <h6>".$rec['address']."</h6><br/>
			   <p>Facts:<br/>".$rec['facts']."</p>
			   <a href='deleteblog.php?n=$rec[name]'><button>Delete</button></a>
	     </div>";
}
?>
</div>
</div>
</div>
<h2 align="center" style="color:red;"><?php     echo $a=@$_GET['msg'];     ?></h2>
<?php
include('admin_footer.php');
?>
</body>
</html>
