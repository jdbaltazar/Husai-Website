<?php
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){
		echo '<li><a href = "services-availed.php">Availed Services</a></li>';
		echo '<li><a href = "products-availed.php">Availed Products</a></li>';
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		echo '<li><a href = "../accounts">Accounts</a></li>';
	}
}

?>