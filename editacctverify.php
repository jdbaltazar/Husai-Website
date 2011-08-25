<?php

session_start();

$edit_error = false;

$firstname = $_POST['firstName'];
$middlename = $_POST['middleName'];
$lastname = $_POST['lastName'];
$address = $_POST['address'];
$bdate = $_POST['year']."-".$_POST['month']."-".$_POST['day'];


$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("mydb", $con);
	
	$sql = "update user_account set first_name = '".$firstname."', middle_name = '".$middlename."', last_name = '".$lastname."', address = '".$address."', birthdate = '".$bdate."' where username = '".$_SESSION['session_user']."'";
	
	if (!mysql_query($sql,$con))
	{
		$edit_error = true;
	}


mysql_close($con);

?>