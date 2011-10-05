<?php
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){
	if($_SESSION['session_user_type'] == 'Husai Customer'){
		echo '<p id="logoutbutton">';
		echo '<a href="actions/logout.php">Logout</a>';
		echo '</p>';
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		echo '<p id="logoutbutton">';
		echo '<a href="actions/logout.php">Logout</a>';
		echo '</p>';
	}
}

?>