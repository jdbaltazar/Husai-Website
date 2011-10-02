<?php

if(isset($_POST['can_get_entry'])){

	$can_get_entry = trim($_POST['can_get_entry']);

	if($can_get_entry!=""){
		require("../../config/config.php");
		$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db(DB_NAME, $con);

		mysql_query("INSERT INTO Member_Get(Description) values('".$can_get_entry."')");

		mysql_close($con);
	}

}

header("Location: ../membership/");