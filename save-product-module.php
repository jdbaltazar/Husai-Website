<?php
//include 'connect.php';
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("husai", $con);
	
	$description  = trim($_POST['description']);
	$price = trim($_POST['price']);
	$status = trim($_POST['status']);
	$new = trim($_POST['new']);
	$category = trim($_POST['category']);
	$special_offer = trim($_POST['special_offer']);
	$in_wishlist = trim($_POST['in_wishlist']);
	
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