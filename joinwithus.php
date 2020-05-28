<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="images/Screenshot (75).png">
<title>Join with Us</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/footer.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.js" type="text/javascript" ></script>
<script src="js/bootstrap.js" type="text/javascript" ></script>
<script src="js/validation.js" type="text/javascript"></script>
<style>
body
{
background-image:url('images/bg-2.jpg');
background-size:cover;
font-family:"Times New Roman";
}
.wrap
{
max-width:700px;
border-radius:20px;
margin:auto;
background:rgba(0,0,0,0.8);
box-sizing:border-box;
padding:40px;
color:#000000;
margin-top:100px;
}
input[type=text],input[type=password]
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
p a:hover
{
background:#CCCCCC;
}
</style>
<style media="screen">
#custom-button
{
color:#FFFFFF;
background:rgba(0,0,0,0.10);
padding:10px;
border:none;
margin-top:20px;
border-radius:5px;
cursor:pointer;
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
#custom-button:hover
{
background-color:#999999;
}
#custom-text
{
margin-left:10px;
font-family:sans-serif;
color:#666666;
}
</style>
</head>


<body>
<?php
include('navbar_login.php');
?>
<div class="wrap">
   <h2 style="color:#FFFFFF;" align="center"><b>Be an Employee</b></h2>
   <hr color="#FFFFFF"/>
   <form action="#" method="post">
   <input type="text" placeholder="First Name..." onKeyPress="return onlyNumberKey(event)" name="fname" required/>
   <input type="text" placeholder="Last Name..." onKeyPress="return onlyNumberKey(event)" name="lname" required/>
   <input type="text" placeholder="Expertised In" onKeyPress="return onlyNumberKey(event)" name="expert" required/>
   <input type="text" placeholder="Email..." name="email" required/>
   <input type="text" placeholder="Aadhar Number.." name="aadhar" maxlength="16" required/>
   <input type="text" placeholder="Father-Name" onKeyPress="return onlyNumberKey(event)" name="father" required/>
   <input type="text" placeholder="Pincode" name="pin" required/>
   <input type="text" placeholder="Address" name="address" required/>
   <input type="file" id="real-file" name="file" hidden/>
   <button type="button" id="custom-button">CHOOSE YOUR PHOTO</button>
   <span id="custom-text">No file choosen..,yet</span>
   <input type="submit" value="Submit" name="Submit">
   </form>
</div>
<br/><br/><br/><br/>
<script type="text/javascript">
const realfilebtn= document.getElementById("real-file");
const custombtn= document.getElementById("custom-button");
const customtxt= document.getElementById("custom-text");
custombtn.addEventListener("click", function()
{
realfilebtn.click();
});
</script>
<?php
include('dbconfig.php');
if(isset($_POST['Submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$expert=$_POST['expert'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$father=$_POST['father'];
$pin=$_POST['pin'];
$address=$_POST['address'];
$file=$_POST['file'];
$sql = "INSERT INTO employees (first_name,last_name,expert,email,aadhar,father,pincode,address,pic) VALUES ('$fname','$lname','$expert','$email','$aadhar','$father','$pin','$address','$file')";
mysqli_query($conn,$sql);
echo "<h3 id=ch>Your response is recorded successfully</h3>";
}
include('login_footer.php');
?>
</body>
</html>
