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
?>

<html>
<head>
<title>Verify Registration</title>
</head>
<body>


<?php
if($found_account == "true"){
	echo 	'<b>SUCCESSFULLY LOGGED IN</b>';
}
else{
	echo 	'<b>ACCOUNT NOT FOUND!</b>';
}
?>
</body>

</html>
