<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){

	if(isset($_POST['service_searchfield'])&&isset($_POST['service_search_cat'])){

		$service_searchfield = trim($_POST['service_searchfield']);
		$service_search_cat = $_POST['service_search_cat'];


		if($service_search_cat=="Service"){
			if($service_searchfield!=""){
				$query = "SELECT availed_service.date, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' and service.service_name like '%".$service_searchfield."%' order by service.service_name";
			}else{
				$query = "SELECT availed_service.date, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' order by service.service_name";
			}
		}else if($service_search_cat=="Therapist"){
			if($service_searchfield!=""){
				$query = "SELECT availed_service.date, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' and availed_service.therapist like '%".$service_searchfield."%' order by availed_service.therapist";
			}else{
				$query = "SELECT availed_service.date, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' order by availed_service.therapist";
			}
		}else if($service_search_cat=="Date"){
			if($service_searchfield!=""){
				$query = "SELECT availed_service.date, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' and availed_service.date like '%".$service_searchfield."%' order by availed_service.date desc";
			}else{
				$query = "SELECT availed_service.date, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' order by availed_service.date desc";
			}
		}else if($service_search_cat=="Type"){
			if($service_searchfield!=""){
				$query = "SELECT availed_service.date, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' and service.category like '%".$service_searchfield."%' order by service.category";
			}else{
				$query = "SELECT availed_service.date, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' order by service.category";
			}
		}else{
			if($service_searchfield!=""){
				$query = "SELECT availed_service.date, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' and (service.service_name like '%".$service_searchfield."%' or availed_service.therapist like '%".$service_searchfield."%' or availed_service.date like '%".$service_searchfield."%' or service.category like '%".$service_searchfield."%') order by availed_service.date desc";
			}else{
				$query = "SELECT availed_service.date, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' order by availed_service.date desc";
			}
		}
	}

	if($_SESSION['session_user_type'] == 'Husai Customer'){
		include("../../application/views/services-availed/services-availed-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/services-availed/manage-services-availed.php");
	}
	exit;


}else{

	include("../actions/logout.php");
	exit;
}

?>