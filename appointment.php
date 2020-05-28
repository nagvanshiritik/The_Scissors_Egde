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
<title>Appointment</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/footer.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.js" type="text/javascript" ></script>
<script src="js/bootstrap.js" type="text/javascript" ></script>
<script src="js/validation.js" type="text/javascript"></script>
<style>
body
{
font-family:Times New Roman;
background-image:url('images/bg-2.jpg');
background-size:cover;
}
option
{
color:#000000;
}
.wrap
{
max-width:500px;
margin:auto;
padding:50px;
border-sizing:border-box;
background:rgba(0,0,0,0.8);
border-radius:10px;
border:none;
margin-top:100px;
margin-bottom:100px;
}
input[type=submit]
{
border:none;
background-color:#CCCCCC;
border-radius:20px;
width:100%;
margin:10px;
padding:10px;
}
input[type=text],input[type=time],input[type=number],select
{
width:100%;
padding:15px 5px;
border-radius:10px;
border-sizing:border-box;
color:#FFFFFF;
background-color:rgba(0,0,0,0.10);
outline:none;
border:none;
margin:5px;
border-bottom:1px dotted #FFFFFF;
font-weight:bold;
}
</style>
</head>

<body>
<?php include('navbar_login.php'); ?>
<div class="wrap">
     <form action="checkout.php" method="post">
          <h1 align="center" style="color:#FFFFFF;">Book Your Slot</h1>
          <hr 1px color="#FFFFFF"/>
          <input type="text" placeholder="Name" required name="name"/>
          <select name="service">
              <option>Service Type</option>
              <option value="Massage">Massage</option>
              <option value="HairCut">Haircut</option>
              <option value="waxing">Waxing</option>
              <option value="Hair Coloring">Hair Coloring</option>
              <option value="Dressing">Dressing</option>
              <option value="Pedicure">Pedicure</option>
              <option value="Manicure">Manicure</option>
              <option value="Facial">Facial</option>
          </select>
          <select name="gender">
              <option>Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
          </select>
          <input type="time" required name="time"/>
          <input type="text" placeholder="Address" required name="add"/>
          <input type="number" placeholder="Pincode" required name="pin"/>
          <select name="payment">
              <option>Payment Type</option>
              <option value="Inhand cash">Inhand Cash</option>
              <option value="Online">Online</option>
          </select>
          <input type="submit" value="Book" name="Submit"/>
     </form>
</div>
<?php include('login_footer.php'); ?>
</body>
</html>