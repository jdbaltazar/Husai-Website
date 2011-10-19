<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		include("../../application/views/about/about.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/about/delete-vision.php");
	}
	exit;
}else{
	include("../../application/views/about/about.php");
	exit;
}

