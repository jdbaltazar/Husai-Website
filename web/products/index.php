<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		include("../../application/views/products/products-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		if(isset($_GET['id'])){
			include("../../application/views/products/product-profile.php");
		}else{
			include("../../application/views/products/manage-products.php");
		}
	}
	exit;
}else{
	include("../../application/views/products/products-all.php");
	exit;
}

?>