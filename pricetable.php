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
include('navbar_admin.php');
include('service.php');
?>
<h2 align="center" style="color:red;"><?php     echo $a=@$_GET['msg'];     ?></h2>
<?php
include('admin_footer.php');
?>
</body>
</html>
