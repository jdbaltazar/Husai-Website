<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){

	if(isset($_POST['service_searchfield'])&&isset($_POST['service_search_cat'])){

		$service_searchfield = trim($_POST['service_searchfield']);
		$service_search_cat = $_POST['service_search_cat'];

		if($service_search_cat=="Service"){
			if($service_searchfield!=""){
				$query = "SELECT * from service where service_name like '%".$service_searchfield."%' order by service_name";
			}else{
				$query = "SELECT * from service order by service_name";
			}
		}
		else if($service_search_cat=="Category"){
			if($service_searchfield!=""){
				$query = "SELECT * from service where category like '%".$service_searchfield."%' order by category";
			}else{
				$query = "SELECT * from service order by category";
			}
		}
		else if($service_search_cat=="Status"){
			if($service_searchfield!=""){
				$query = "SELECT * from service where status like '%".$service_searchfield."%' order by status";
			}else{
				$query = "SELECT * from service order by status";
			}
		}
		else if($service_search_cat=="Discounted"){
			if($service_searchfield!=""){
				$query = "SELECT * from service where discounted=1 && service_name like '%".$service_searchfield."%' order by service_name";
			}else{
				$query = "SELECT * from service where discounted=1 order by service_name";
			}
		}
		else if($service_search_cat=="Regular Price"){
			if($service_searchfield!=""){
				$query = "SELECT * from service where (discounted is null or discounted=0) && service_name like '%".$service_searchfield."%'";
			}else{
				$query = "SELECT * from service where (discounted is null or discounted=0) order by service_name";
			}
		}
		else{
			if($service_searchfield!=""){
				$query = "SELECT * from service where (service_name like '%".$service_searchfield."%' or category like '%".$service_searchfield."%' or status like '%".$service_searchfield."%' ) order by service_name";
			}else{
				$query = "SELECT * from service order by service_name";
			}
		}
	}

	if($_SESSION['session_user_type'] == 'Husai Customer'){
		include("../../application/views/services/services-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/services/manage-services.php");
	}
	exit;


}else{

	include("../actions/logout.php");
	exit;
}

?>