<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>HOME</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<script src="js/jquery.js" type="text/javascript" ></script>
<script src="js/bootstrap.js" type="text/javascript" ></script>
</head>

<body>
<?php
include('dbconfig.php');
<?php
if(isset($_POST['submit']))
{
$sql="select first_yr from members";
$run=mysqli_query($conn,$sql);
while($rec=mysqli_fetch_array($run))
{
	echo "<div class=container-fluid style=background-color:rgba(0,0,0,0.8); id=wrap>
	           <h3>".$rec['first_yr']."</h3>
	     </div>";
}
}
?>
</body>
</html>