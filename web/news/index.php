<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		header('Location: ../');
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		header('Location: ../');
	}
	exit;
}else{
	header('Location: ../');
	exit;
}

