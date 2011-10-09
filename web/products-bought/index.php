<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		include("../../application/views/products-bought/products-bought-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		if(isset($_GET['id'])&&isset($_GET['name'])){
			include("../../application/views/products-bought/manage-products-bought.php");
		}else{
			header('Location: ../accounts/');
		}
	}
	exit;
}else{
		include("../actions/logout.php");
	exit;
}

?>