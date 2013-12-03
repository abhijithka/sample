<?php
require_once('config.php');
$sqlobj = $mysqli_connect("localhost","root","9745025172","db_login");
if(mysqli_connect_errno())
{
	printf("connection failed",mysqli_connect_error());

}
else {echo "connected";}
?>