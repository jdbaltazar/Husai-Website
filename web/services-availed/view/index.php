<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		include("../../../application/views/services-availed/services-availed-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		if(!isset($_GET['id'])){
			include("../../../application/views/services-availed/manage-services-availed.php");
		}else{
			include("../../../application/views/services-availed/view/service-availed-profile.php");
		}
	}
	exit;
}else{
	include("../../../application/views/services/services-all.php");
	exit;
}

?>