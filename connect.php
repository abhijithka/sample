<?php
require_once('config.php');
$sqlobj = mysqli_connect($host,$username,$password,$db_name);
if(mysqli_connect_errno())
{
	printf("connection failed",mysqli_connect_error());
	exit();

}
else echo "connected";
?>
