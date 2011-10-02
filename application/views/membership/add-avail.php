<?php

if(isset($_POST['can_avail_entry'])){

	$can_avail_entry = trim($_POST['can_avail_entry']);


	if($can_avail_entry!=""){
		require("../../config/config.php");
		$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db(DB_NAME, $con);

		mysql_query("INSERT INTO Member_Avail(Description) values('".$can_avail_entry."')");

		mysql_close($con);
	}

}

header("Location: ../membership/");