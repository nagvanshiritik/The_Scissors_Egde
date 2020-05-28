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
<title>Add Your Blog</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/footer.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.js" type="text/javascript" ></script>
<script src="js/bootstrap.js" type="text/javascript" ></script>
<script src="js/validation.js" type="text/javascript"></script>
<script src="js/validatingnumber.js" type="text/javascript"></script>
<style>
body
{
background-image:url('images/bg-2.jpg');
background-size:cover;
}
.wrap
{
max-width:700px;
padding:50px;
margin:auto;
}
#a
{
padding:40px;
background:rgba(0,0,0,0.8);
}
input[type=submit]:hover
{
background:#CCCCCC;
opacity:0.7;
}
input[type=submit]
{
width:100%;
box-sizing:border-box;
padding:10px;
margin-top:30px;
outline:none;
border:none;
background:#FFFFFF;
opacity:0.7;
border-radius:20px;
font-size:20px;
color:#000000;
font-weight:bold;
}
label
{
color:#FFFFFF;
font-weight:bold;
font-size:20px;
font-family:Times New Roman;
}
input[type=text], textarea,input[type=number]
{
width:100%;
box-sizing:border-box;
background:rgba(0,0,0,0.10);
padding:12px 5px;
color:#FFFFFF;
border-radius:5px;
margin:5px;
font-weight:normal;
resize:none;
}
</style>
</head>

<body>
<?php
include('navbar_login.php');
?>
<div class="wrap">
<div id="a">
<form action="login_blog.php" method="post">
<h2 style="color:#FFFFFF; font-family:Times New Roman;" align="center"><b>Fill To Add Your Blog</b></h2>
<label>Name</label>
<input type="text" placeholder="Name Here..." required width="600px" name="name" onKeyPress="return onlyNumberKey(event)"/>
<label>Your Profession</label>
<input type="text" placeholder="Profession..." required name="profession" onKeyPress="return onlyNumberKey(event)"/>
<label>Contact Number</label>
<input type="number" placeholder="Phone No...." required maxlength="10" name="contact"/>
<label>Address</label>
<input type="text" placeholder="Address Here..." required name="add"/>
<label>Intresting Facts</label>
<textarea cols="57" rows="8" placeholder="Message (Word Limit: 250)..." maxlength="250" name="fact"></textarea>
<input type="submit" value="Submit" name="Submit">
</form>
</div>
</div>
<?php
include('login_footer.php');
?>
</body>
</html>
