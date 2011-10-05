<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		include("../../application/views/products/products-hair.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/products/manage-products.php");
	}
	exit;
}else{
	include("../../application/views/products/products-hair.php");
	exit;
}

?>