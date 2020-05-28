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
<title>Reviews</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/footer.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.js" type="text/javascript" ></script>
<script src="js/bootstrap.js" type="text/javascript" ></script>
<script src="js/validation.js" type="text/javascript"></script>
</head>
<style>
body
{
font-family:Times New Roman;
color:#FFFFFF;
background-image:url(images/bg-1.jpg);
background-size:cover;
}
input[type=radio]
{
margin-right:100px;
margin-top:10px;
height:20px;
width:20px;
}
input[type=submit]
{
border-radius:10px;
width:100%;
padding:10px;
margin-top:10px;
outline:none;
border:none;
font-weight:bold;
}
input[type=text],textarea
{
border:1px dotted #FFFFFF;
color:#FFFFFF;
width:100%;
background-color:rgba(0,0,0,0.10);
padding:12px 5px;
outline:none;
border-sizing:border-box;
border-radius:10px;
}
.wrap
{
margin:auto;
max-width:700px;
padding:20px;
border-radius:10px;
border-sizing:border-box;
background-color:rgba(0,0,0,0.8);
}
label
{
font-size:20px;
}
</style>
<body>
<?php
include('navbar_login.php');
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="wrap">
<h1 align="center" style="padding:10px; font-weight:bold;">Add Review</h1>
 <form action="login_reviewssend.php" method="post">
 <label>Name</label>
 <input placeholder="Name" type="text" onKeyPress="return onlyNumberKey(event)" name="name" required>
 <label>Rate Our Service</label>
 <input placeholder="How Much Will You Rate Us Out of 5" type="text" maxlength="1" name="rating" required>
 <br/>
 <label>Write your review</label>
 <textarea placeholder="Reviews(Max 250 Words)..." type="text" maxlength="250" rows="7" cols="50" name="opinion" style="resize:none;" required></textarea>
 <input type="submit" value="Submit" name="Submit"/>
 </form>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php
include('login_footer.php');
?>
</body>
</html>
