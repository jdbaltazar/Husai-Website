<?php

session_start();
if(!isset($_SESSION['session_user'])||!isset($_SESSION['session_user_type'])||!isset($_SESSION['authenticated'])){
	header("Location: ../services");
}

if($_SESSION['session_user_type'] != 'Husai Administrator'){
	header("Location: ../services");
}

$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("husai", $con);

$discounted = "";
$id = $_POST['id'];
$service_name  = trim($_POST['service-name']);
$description = trim($_POST['service-description']);
$status = trim($_POST['service-status']);
$file_path = trim($_POST['filepath']);
$price = trim($_POST['service-price']);
$promo = trim($_POST['mymenu']);
$promo_from = trim($_POST['fromDate']);
$promo_to = trim($_POST['toDate']);


if($promo == "Discounted"){
	$discounted = true;
}
else
$discounted = false;

if($discounted == true){
	$discount = trim($_POST['percentdiscount']);
	$update_service = "update service set Service_Name='$service_name', Description='$description', Charge='$price', Status='$status', File_Path='$file_path', Discounted=$discounted, Discount_From='$promo_from',
			Discount_To='$promo_to', Discount='$discount' WHERE id=$id";
}
else
$update_service = "update service set Service_Name='$service_name', Description='$description', Charge='$price', Status='$status',File_Path='$file_path', Discounted=false, Discount_From=NULL,
			Discount_To=NULL, Discount=NULL WHERE id=$id";

if (!mysql_query($update_service,$con))
{
	//echo "id: ".$id;
	//die('Error: ' . mysql_error());
	header('Location: ../services/update');
}
else{
	header('Location: ../services');
}

mysql_close($con);
?>