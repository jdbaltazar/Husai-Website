<?php

if(isset($_POST['vision_entry'])){

	$vision_entry = trim($_POST['vision_entry']);

	if($vision_entry!=""){
		require("../../config/config.php");
		$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db(DB_NAME, $con);

		mysql_query("INSERT INTO Husai_Vision(Vision) values('".$vision_entry."')");

		mysql_close($con);
	}

}

header("Location: ../about/");