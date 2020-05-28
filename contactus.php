<?php
include('dbconfig.php');
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
<script src="js/validation.js" type="text/javascript"></script>
<style>
<style>
.wrap
{
padding:50px;
}
input[type=submit]
{
width:100%;
box-sizing:border-box;
padding:10px;
margin-top:30px;
outline:none;
border:none;
background:#000000;;
border-radius:20px;
font-size:20px;
color:#FFFFFF;
font-weight:bold;
}
label
{
color:#000000;
font-weight:bold;
font-size:20px;
font-family:Times New Roman;
}
#ch
{
border-sizing:border-box;
background-color:#66FF66;
border-radius:10px;
border:1px solid #009900;
color:#000000;
font-family:Times New Roman;
padding:30px;
text-align:center;
opacity:0.7;
width:1000px;
margin:auto;
margin-bottom:20px;
}
input[type=text], textarea
{
width:100%;
box-sizing:border-box;
padding:12px 5px;
color:#FFFFFF;
border-radius:5px;
margin:5px;
font-weight:normal;
resize:none;
}
img
{
margin-bottom:10px;
}
p
{
color:#FFFFFF;
font-family:Times New Roman, Times, serif;
font-size:24px;
}
</style>
</head>

<body>
<?php
include('navigation.php');
?>
<h1 align="center" style="color:#000000; font-family:Times New Roman, Times, serif; font-size:60px; margin:20px"><b>Contact Us</b></h1>
<div class="container-fluid">
<div class="row">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7125.559622435566!2d83.36996012438307!3d26.75140178278895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991446f5faef6ab%3A0x2baf62897261e760!2sGolghar%2C%20Gorakhpur%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1582839654905!5m2!1sen!2sin" width="2000" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
</div>
<div class="container-fluid" style="background-color:#000000;">
<br/><br/>
<h1 align="center" style="color:#FFFFFF; font-family:Times New Roman, Times, serif; font-size:50px;"><b>Get In Touch</b></h1>
<br/><br/>
   <div class="container">
       <div class="row">
           <div class="col-lg-4" align="center">
           <img src="images/Location-512.png" align="middle" width="100px" height="100px">
           <h1 style="color:#FFFFFF; font-family:Times New Roman, Times, serif;"><b>ADDRESS</b></h1>
           <p>
           <b>Head Branch</b><br/>
           Golghar, Gorakhpur<br/>
           273001<br/>
           Uttar Pradesh<br/>
           India
           <br/><br/>
           <b>Control Centre</b><br/>
           GLA University, Mathura<br/>
           281406<br/>
           Uttar Pradesh<br/>
           India
           </p>
           </div>
           <div class="col-lg-4" align="center">
           <img src="images/image_preview.png" align="middle" width="100px" height="100px">
           <h1 style="color:#FFFFFF; font-family:Times New Roman, Times, serif;"><b>PHONE</b></h1>
           <p>
           <b>Head Branch</b><br/>
           8957906164<br/>
           (Gorakhpur)<br/>
           <br/>
           <b>Control Centre</b><br/>
           7897094840<br/>
           (Mathura)<br/>
           </p>
           </div>
           <div class="col-lg-4" align="center">
           <img src="images/90-904209_email-icon-android-application-icons-softiconsm-android-email.png" align="middle" width="100px" height="100px">
           <h1 style="color:#FFFFFF; font-family:Times New Roman, Times, serif;"><b>EMAIL</b></h1>
           <p>
           <b>Head Branch</b><br/>
           tse_Services@gmail.com<br/>
           (Gorakhpur)<br/>
           <br/>
           <b>Control Centre</b><br/>
           the_scissors_edge@gmail.com<br/>
           (Mathura)<br/>
           </p></p>
           </div>
       </div>
     </div>
</div>

<div class="container" style="margin-bottom:50px;">       
       <div class="row">
          <div class="col-lg-4">
          <h1 align="left" style="color:#000000; font-family:serif; font-size:55px; margin-top:70px;"><b>Message Us</b></h1>
          <p style="color:#000000; font-family:Times New Roman, Times, serif; margin-top:30px;" align="justify"><i>If you wish to be considered for employment at The Scissors Edge, please do not send a message, here instead, please complete The Scissor's Edge Employee application form and our Human Resources department will contact you after their review of your submitted information.</i></p>
          <img src="images/Screenshot (75).png">
          </div>
<div class="col-lg-8">
<div class="wrap" style="margin-top:30px;" >
<br/><br/>
<form action="#" method="post">
<label>Name</label>
<input type="text" placeholder="Name Here..." required width="600px" onKeyPress="return onlyNumberKey(event)" name="name"/>
<label>Email</label>
<input type="text" placeholder="Email..." required name="mail" style="color:#000000;"/>
<label>Comments</label>
<textarea cols="57" rows="8" placeholder="Message (Word Limit: 250)..." maxlength="250" name="message" style="color:#000000;"></textarea>
<input type="submit" value="Submit" name="Submit">
</form>
</div>
</div>
</div>
</div>
<?php
if(isset($_POST['Submit']))
{
$name=$_POST['name'];
$email=$_POST['mail'];
$message=$_POST['message'];
$sql="INSERT INTO contactus (name,email,message) VALUES ('$name','$email','$message')";
mysqli_query($conn,$sql);
echo "<h3 id=ch>We Will Reply You Soon</h3>";
}
?>
<?php
include('footer.php');
?>
</body>
</html>
