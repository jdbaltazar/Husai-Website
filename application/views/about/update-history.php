<?php

if(isset($_POST['history_entry'])){

	$history_entry = trim($_POST['history_entry']);

	if($history_entry!=""){
		require("../../config/config.php");
		$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db(DB_NAME, $con);

		mysql_query("UPDATE Husai set History='".$history_entry."'");

		mysql_close($con);
		
	}

}

header("Location: ../about/");