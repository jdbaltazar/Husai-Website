<?php

$found_account = "false";
$username = $_POST['username'];
$password = $_POST['password'];

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
	
	session_start();
	$_SESSION['username'] = $username;
	header('location: admin-home.php');
}
else{
	header('location: login.php');
}

?>
