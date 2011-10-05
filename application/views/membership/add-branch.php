<?php

if(isset($_POST['branchname'])&&isset($_POST['branchaddress'])&&isset($_POST['contact'])&&isset($_POST['schedule'])&&isset($_POST['visibility'])){


	$branchname = trim($_POST['branchname']);
	$branchaddress = trim($_POST['branchaddress']);
	$contact = trim($_POST['contact']);
	$schedule = trim($_POST['schedule']);
	$visibility = trim($_POST['visibility']);

	require("../../config/config.php");
	
	$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db(DB_NAME, $con);
	
	
	if($branchname!=""&&$branchaddress!=""&&$contact!=""&&$schedule!=""&&$visibility!=""){
		mysql_query("INSERT INTO Husai_Branch Values(null, '".$branchname."','".$branchaddress."', '".$contact."', '".$schedule."', '".$visibility."')");
	}
		
	mysql_close($con);


}

header("Location: ../membership/");