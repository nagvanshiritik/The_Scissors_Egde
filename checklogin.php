<?php 
session_start();
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
 if(isset($_REQUEST['login']))
 {
 $name=$_REQUEST['username'];
 $pass=$_REQUEST['password'];	 
 $que="select * from signup where binary username='$name' and binary password='$pass'";
 $x=mysqli_query($conn,$que);
 if(mysqli_num_rows($x)==1)
 {
  $_SESSION['username']=$name;
  header('location:after_login.php');
 } 
 else
 {
 header('location:login.php?msg=Either user Name or Password is incorrect');
 }
}
?>
</body>
</html>
