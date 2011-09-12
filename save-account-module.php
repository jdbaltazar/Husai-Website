<?php
//include 'connect.php';
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("husai", $con);

	
	$bdate = $_POST['byear']."-".$_POST['bmonth']."-".$_POST['bday'];
	$username  = trim($_POST['username']);
	$password = trim($_POST['password']);
	$type = trim($_POST['type']);
	$status = trim($_POST['status']);
	$name = trim($_POST['name']);
	$address = trim($_POST['address']);
	$sex = trim($_POST['sex']);
	$telephone = trim($_POST['telephone']);
	$businessAd = trim($_POST['businessAd']);
	$businessPhone = trim($_POST['businessPhone']);
	$civilStatus = trim($_POST['civilStatus']);
	$occupation = trim($_POST['occupation']);
	$referredby = trim($_POST['referredby']);
	
	$add_acct = "insert into account VALUES('".$username."', '".$password."','".$type."','".$status."','".$name."','".$address."', '".$bdate."', '".$sex."', '".$telephone."','".$businessAd."','".$businessPhone."','".$civilStatus."','".$occupation."','".$referredby."');";
	if (!mysql_query($add_acct,$con))
	{
		//die('Error: ' . mysql_error());
		header('Location: create-account.php');
	}
	else{
		header('Location: index.php');
	}

mysql_close($con);
?>