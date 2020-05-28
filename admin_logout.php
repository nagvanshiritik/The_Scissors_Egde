<?php 
session_start();
session_destroy();
if(isset($_SESSION['username'])==$s)
{
session_destroy();
echo "<script>location.href='admin_login.php'</script>";
}
else
{
echo "<script>location.href='admin_login.php'</script>";
}
?>