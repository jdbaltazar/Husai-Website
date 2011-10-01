<?php
//$_SESSION['service-searchfield'] = $_POST['service-searchfield'];
//$_SESSION['service-search-cat'] = $_POST['service-search-cat'];

$service_searchfield = "";
$service_search_cat = "All";

if(isset($_SESSION['service_searchfield'])){
	$service_searchfield =$_SESSION['service_searchfield'];
}

$query = "SELECT availed_service.date, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' order by availed_service.date desc";
if(isset($_SESSION['service-searchfield'])){

}

