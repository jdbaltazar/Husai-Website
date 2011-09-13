<?php
session_start();
$found_account = "false";
$username = $_POST['username'];
$password = $_POST['password'];

echo $username;
echo $password;

$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("husai", $con);

$result = mysql_query("SELECT * FROM account");

while($row = mysql_fetch_array($result))
{
	if($row['Username']== $username){
		if($row['Password']== $password){
			$found_account = "true";
		}else{
			$found_account = "false";
		}
		break;
	}

}

mysql_close($con);

if($found_account == "true"){
	$_SESSION['has_user'] = 1;
	$_SESSION['session_user'] = $username;

	header('Location: ../admin/manage-accounts.php');
	
}else{
	mysql_close($con);
	session_destroy();
	header('Location: home.php');
}

?>