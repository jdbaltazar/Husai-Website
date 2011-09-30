<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){		
		include("../../application/views/products-availed/products-availed-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/services-availed/manage-products-availed.php");
	}
	exit;
}else{
	include("../");
	exit;
}

?>