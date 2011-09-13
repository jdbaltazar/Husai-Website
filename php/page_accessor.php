<?php
session_start();
if(!isset($_SESSION['has_user'])){
	session_destroy();
	header('Location: home.php');
}
?>