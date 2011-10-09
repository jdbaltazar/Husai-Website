<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){

	if($_SESSION['session_user_type'] == 'Husai Customer'){
		include("../../application/views/services-availed/services-availed-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		if(isset($_GET['id'])&&isset($_GET['name'])){
			include("../../application/views/services-availed/manage-services-availed.php");
		}else{
			header('Location: ../accounts/');
		}
	}
	exit;
}else{
	include("../actions/logout.php");
	exit;
}

?>