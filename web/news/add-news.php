<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		header('Location: ../');
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/news/add-news.php");
	}
	exit;
}else{
	header('Location: ../');
	exit;
}

