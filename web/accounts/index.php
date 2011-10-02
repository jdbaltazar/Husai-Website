<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/accounts/manage-accounts.php");
	}else if($_SESSION['session_user_type'] == 'Husai Customer'){
		header('Location: ../accounts/view/account-profile.php?id='.$_SESSION['session_user']);
	}
	exit;
}else{
	header('Location: ../index.php');
	exit;
}

?>