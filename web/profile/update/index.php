<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){
		include("../../../application/views/profile/update/profile-update.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../../application/views/profile/update/profile-update.php");
	}
	exit;
}else{
	include("../actions/logout.php");
	exit;
}

?>