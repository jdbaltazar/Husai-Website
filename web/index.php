<?php

session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){
		include("../application/views/home-customer.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../application/views/home-admin.php");
	}
	exit;
}else{
	session_destroy();
	include("../application/views/home.php");
	exit;
}

?>