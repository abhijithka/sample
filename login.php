 <?php
//echo "<input type='text' name='veruthe' value='veruthe'/>";
$name=$mysqli->real_escape_string($_REQUEST['username']);
echo $name;
$pass = $mysqli->real_escape_string($_REQUEST['password']);

require_once('connect.php');
$query= "SELECT * FROM 'new' WHERE 'username'=$name";
$result=$mysqli->query($query);
$row=$result->fetch_assoc();
if($row['password'] != $password)
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

