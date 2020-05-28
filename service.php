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
color:#FFFFFF;
background-size:cover;
background-image:url('images/bg-2.jpg');
font-family:"Times New Roman";
}
button
{
outline:none;
color:#FFFFFF;
background-color:#666666;
border:none;
border-radius:10px;
font-size:18px;
width:100px;
}
#h
{
background-color:#000000;
font-weight:bold;
font-size:24px;
}
td
{
font-size:20px;
padding:30px;
text-align:center;
}
table
{
border-sizing:border-box;
outline:none;
border:none;
background:rgba(0,0,0,0.8);
border-radius:15px;
margin-top:30px;
margin-bottom:30px;
}
</style>
</head>

<body>
<div class="container">
    <table align="center" border="1">
            <tr>
            <td id="h">Service Offered</td>
            <td id="h">Price</td>
            <td id="h">Time</td>
            <td id="h">Delete Service</td>
        </tr>
<?php
include('dbconfig.php');
$que="Select * from servicetable";
$run=mysqli_query($conn,$que);
while($rec=mysqli_fetch_array($run))
{
    echo "<tr>
     	      <td>".$rec['service']."</td>
			  <td>Rs.</h4>".$rec['price']."</td>
			  <td>".$rec['timing']."</td>
			  <td><a href='deleteservice.php?st=$rec[service]'><button>Delete</button></a></td>
		  </tr>";
}
?>
    </table>
</div>
</body>
</html>
