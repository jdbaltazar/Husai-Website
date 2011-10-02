<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		include("../../../application/views/accounts/accounts-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		if(isset($_GET['id'])){
			include("../../../application/views/accounts/account-view.php");
			//include("../../../application/views/accounts/view/account-view.php?".$_GET['id']);
		}else{
			header('Location: ../accounts/');
		}
	}
	exit;
}else{
	include("../");
	exit;
}

?>