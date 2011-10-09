<?php

if(isset($_POST['newstitle'])&&isset($_POST['newsdescription'])){

	$newstitle = trim($_POST['newstitle']);	
	$newsdescription = trim($_POST['newsdescription']);
	$newsimage = trim($_POST['newsimage']);

	if($newstitle!=""){
		require("../../config/config.php");
		$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db(DB_NAME, $con);
		
		mysql_query("INSERT INTO News(Title, Description, File_Path) values('".$newstitle."', '".$newsdescription."', '".$newsimage."')");

		mysql_close($con);
	}

}

header("Location: ../news/");