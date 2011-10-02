<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){

	if($_SESSION['session_user_type'] == 'Husai Administrator'){
		if(isset($_GET['id'])){
			include("../../application/views/accounts/account-view.php");
		}else{
			include("../../application/views/accounts/manage-accounts.php");
		}
	}else if($_SESSION['session_user_type'] == 'Husai Customer'){
		header('Location: ../profile/');
	}

	exit;
}else{
	header('Location: ../index.php');
	exit;
}

?>