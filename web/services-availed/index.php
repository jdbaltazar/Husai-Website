<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){

	if(isset($_POST['service_searchfield'])){
		$_SESSION['service_searchfield'] = $_POST['service_searchfield'];
		echo $_POST['service_searchfield'];
	}

	if(isset($_POST['service_search_cat'])){
		$_SESSION['service_search_cat'] = $_POST['service_search_cat'];
	}
	
	if($_SESSION['session_user_type'] == 'Husai Customer'){
		include("../../application/views/services-availed/services-availed-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/services-availed/manage-services-availed.php");
	}
	exit;
}else{
	include("../actions/logout.php");
	exit;
}

?>