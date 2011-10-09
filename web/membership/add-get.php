<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		include("../../application/views/membership/membership.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/membership/add-get.php");
	}
	exit;
}else{
	include("../../application/views/membership/membership.php");
	exit;
}

