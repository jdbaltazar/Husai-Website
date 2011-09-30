<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		include("../../../application/views/services/services-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../../application/views/services/add/service-add.php");
	}
	exit;
}else{
	include("../../../application/views/services/services-all.php");
	exit;
}

?>