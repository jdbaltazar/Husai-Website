<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		header('location: ../');
		exit;
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		
		echo $_POST['username'];
		//include("../../../application/views/accounts/add/account-save.php");
	}
	exit;
}else{
	include("../");
	exit;
}

?>