<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<?php
session_start();
if(!isset($_SESSION['username']))
{
 header('location:login.php?msg=You Must Login First');
}
?>
<?php
include('dbconfig.php');
?>
<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="images/Screenshot (75).png">
<title>Redirected....</title>
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
input[type=submit]:hover
{
box-shadow:0 0 25px 0 black;
}
</style>
</head>
<body>
<?php include('navbar_login.php'); ?>	
<div class="container">
	<div class="row justify-content-center" style="margin-top:100px; margin-bottom:80px;">
    	<div class="col-lg-6 px-6 pb-4">
            <div class="jumbotron p-3 mb-2 text-center" style="box-shadow:0 0 25px 0 black;">
            <h2 class="text-center text-info p-2">Complete Your Order!</h2>
            <form  action="PaytmKit\pgRedirect.php" method="post">
            	<h6 class="text-center"><b>ORDER ID</b></h6>
            	<div class="form-group">
                	<input id="ORDER_ID"  class="form-control text-center" name="ORDER_ID" value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                </div>
                <h6 class="text-center"><b>USERNAME</b></h6>
                <div class="form-group">
                	<input id="CUST_ID" class="form-control text-center" name="CUST_ID" value="<?php echo $_SESSION['username']?>">
                </div>
                <h6 class="text-center"><b>E-MAIL</b></h6>
                <div class="form-group">
                    <?php
						$que="Select * from signup where username= '$_SESSION[username]' ";
						$run=mysqli_query($conn,$que);
						while($rec=mysqli_fetch_array($run))
						{
			  				$mail=$rec['email'];
						}
					?>
                	<input id="EMAIL_ID" class="form-control text-center" name="EMAIL" value="<?php echo $mail ?>">
                </div>
 				<h6 class="text-center"><b>TRANSACTION AMOUNT</b></h6>
                <div class="form-group">
                	<input title="TXN_AMOUNT" name="TXN_AMOUNT" value="<?php echo $_GET['c'] ?>" class="form-control text-center">	
                </div>
                <div class="form-group">
                	<input type="submit" name="submit" value="PAY"  style="background-color:#000000; color:#FFFFFF; width:100%; outline:none; border:none; height:45px;  margin-top:10px; border-radius:10px;">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>
</body>
</html>