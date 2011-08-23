<?php
//include 'connect.php';
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("husai", $con);

	
	$bdate = $_POST['byear']."-".$_POST['bmonth']."-".$_POST['bday'];
	$add_acct = "insert into account VALUES('".$_POST['username']."', '".$_POST['password']."','".$_POST['name']."','".$_POST['address']."', '".$bdate."', '".$_POST['sex']."', '".$_POST['telephone']."','".$_POST['businessAd']."','".$_POST['businessPhone']."','".$_POST['civilStatus']."','".$_POST['occupation']."','".$_POST['referredby']."');";
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