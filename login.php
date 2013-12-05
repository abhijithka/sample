 <?php
require_once('connect.php');
$name=$sqlobj->real_escape_string($_REQUEST['username']);
echo $name;
$pass = $sqlobj->real_escape_string($_REQUEST['password']);
$query= "SELECT * FROM 'new' WHERE user='$name' ";
$result=$sqlobj->query($query);
$row=$result->fetch_assoc();
if($row['pw'] != $pass)
{
	echo "authentication failure";
	die();
}
else 
{
	echo "successful authentication";
}
$result->free();
?>

