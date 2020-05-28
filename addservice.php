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
<style>
body
{
background-image:url('images/bg-2.jpg');
background-size:cover;
font-family:"Times New Roman";
}
.wrap
{
box-shadow: 0 0 25px 0 black;
max-width:500px;
border-radius:20px;
margin:auto;
background:rgba(0,0,0,0.8);
box-sizing:border-box;
padding:40px;
color:#000000;
margin-top:100px;
margin-bottom:100px;
}
input[type=text],input[type=number]
{
width:100%;
box-sizing:border-box;
padding:12px 5px;
background:rgba(0,0,0,0.10);
border:none;
outline:none;
border-bottom:1px dotted #FFFFFF;
color:#FFFFFF;
border-radius:5px;
margin:5px;
font-weight:bold;
}
input[type=submit]
{
width:100%;
box-sizing:border-box;
padding:10px;
margin-top:30px;
outline:none;
border:none;
background:#FFFFFF;;
opacity:0.7;
border-radius:20px;
font-size:20px;
color:#000000;
font-weight:bold;
}
input[type=submit]:hover
{
background:#CCCCCC;
opacity:0.7;
}
</style>
</head>

<body>
<?php include('navbar_admin.php'); ?>
<div class="wrap">
   <h2 style="color:#FFFFFF;" align="center"><b>Add Service</b></h2>
   <hr color="#FFFFFF">
   <form action="after_admin.php" method="post">
   <input type="text" placeholder="Service Type" required name="service"/>
   <input type="number" placeholder="Price"  required name="price"/>
   <input type="text" placeholder="Timing"  required name="time"/>
   <input type="submit" value="Add Service" name="Submit"/>
   </form>
</div>
<?php include('admin_footer.php'); ?>
</body>
</html>
