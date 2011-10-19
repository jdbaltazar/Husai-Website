<?php
//include 'connect.php';
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("husai", $con);

$discounted = "";
$id = $_POST['id'];
$service_name  = addslashes(trim($_POST['service-name']));
$description = addslashes(trim($_POST['service-description']));
$status = trim($_POST['service-status']);
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
	$update_service = "update service set Service_Name='$service_name', Description='$description', Charge='$price', Status='$status', Discounted=$discounted, Discount_From='$promo_from',
			Discount_To='$promo_to', Discount='$discount' WHERE id=$id";
}
else
$update_service = "update service set Service_Name='$service_name', Description='$description', Charge='$price', Status='$status', Discounted=false, Discount_From=NULL,
			Discount_To=NULL, Discount=NULL WHERE id=$id";

if (!mysql_query($update_service,$con))
{
	echo "id: ".$id;
	die('Error: ' . mysql_error());
	//header('Location: ../web/admin/service-profile.php');
}
else{
	header('Location: ../web/admin/manage-services-new.php');
}

mysql_close($con);
?>