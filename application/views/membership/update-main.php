<?php

if(isset($_POST['name'])&&isset($_POST['address'])&&isset($_POST['contact'])&&isset($_POST['schedule'])&&isset($_POST['email'])){


	$name = trim($_POST['name']);
	$address = trim($_POST['address']);
	$contact = trim($_POST['contact']);
	$schedule = trim($_POST['schedule']);
	$email = trim($_POST['email']);
	$website = trim($_POST['website']);


	require("../../config/config.php");
	$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db(DB_NAME, $con);
	
	if($name!="")
		mysql_query("UPDATE husai set Name='".$name."'");
	if($address!="")
		mysql_query("UPDATE husai set Address='".$address."'");
	if($contact!="")
		mysql_query("UPDATE husai set Contact_Nos='".$contact."'");
	if($schedule!="")
		mysql_query("UPDATE husai set Operating_Schedule='".$schedule."'");
	if($email!="")
		mysql_query("UPDATE husai set Email='".$email."'");
	mysql_query("UPDATE husai set Website='".$website."'");
	

	mysql_close($con);


}

header("Location: ../membership/");