<?php

$authenticated = "false";
$username = $_POST['username'];
$password = $_POST['password'];
$account_type = "";

if($username==""||$password==""){
	header('location: ../');
	exit;
}


session_start();
session_unset();
require("../../config/config.php");
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);

$result = mysql_query("SELECT * FROM account");

while($row = mysql_fetch_array($result))
{
	if($row['Username']== $username){
		if($row['Password']== $password){
			$_SESSION['session_user'] = $username;
			$_SESSION['session_user_type'] = $row['Type'];
			$_SESSION['authenticated'] = "true";
			break;
		}else{
			break;
		}
	}
}

mysql_close($con);

?>