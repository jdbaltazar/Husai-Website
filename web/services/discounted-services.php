<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		include("../../application/views/services/services-discounted.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/services/manage-services.php");
	}
	exit;
}else{
	include("../../application/views/services/services-discounted.php");
	exit;
}

?>