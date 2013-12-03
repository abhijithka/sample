 <?php
require_once("connect.php");
echo "<input type='text' name='veruthe' value='veruthe';
$name=$mysqli->real_escape_string($_REQUEST['username']);
echo $username;
$pass = $mysqli->real_escape_string($_REQUEST['password']);

$query= "SELECT * FROM 'new' WHERE 'username'=$name";
$result=$mysqli->query($query);
$row=$result->fetch_assoc();
if($row['password'] != $password)
{
	echo "authentication failure";
}
else 
{
	echo "successful authentication";
}




?>

