<?php

if(isset($_POST['id'])&&isset($_POST['branchname'])&&isset($_POST['branchaddress'])&&isset($_POST['contact'])&&isset($_POST['schedule'])&&isset($_POST['visibility'])){


	$id = $_POST['id'];
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
	
	if($branchname!="")
		mysql_query("UPDATE husai_branch set Name='".$branchname."' where id=".$id);
	if($branchaddress!="")
		mysql_query("UPDATE husai_branch set Address='".$branchaddress."' where id=".$id);
	if($contact!="")
		mysql_query("UPDATE husai_branch set Contact_Nos='".$contact."' where id=".$id);
	if($schedule!="")
		mysql_query("UPDATE husai_branch set Operating_Schedule='".$schedule."' where id=".$id);
	if($visibility!="")
		mysql_query("UPDATE husai_branch set Visibility='".$visibility."' where id=".$id);
	
	mysql_close($con);


}

header("Location: ../membership/");