<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/accounts/manage-accounts.php");
	}
	exit;
}else{
	include("../");
	exit;
}

?>