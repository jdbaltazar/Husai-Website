<?php

if(isset($_GET['id'])){

	require("../../config/config.php");
	$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db(DB_NAME, $con);
	mysql_query("DELETE FROM News where id=".$_GET['id']);
	mysql_close($con);

}

header("Location: ../news/");