<?php

if(isset($_POST['mission_entry'])){

	$mission_entry = trim($_POST['mission_entry']);

	if($mission_entry!=""){
		require("../../config/config.php");
		$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db(DB_NAME, $con);

		mysql_query("INSERT INTO Husai_Mission(Mission) values('".$mission_entry."')");

		mysql_close($con);
	}

}

header("Location: ../about/");