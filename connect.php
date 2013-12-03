<?php
require_once('config.php');
$sqlobj = mysqli_connect("localhost","root","9745025172","new");
if(mysqli_connect_errno())
{
	printf("connection failed",mysqli_connect_error());
	exit();

}
else echo "connected";
?>
