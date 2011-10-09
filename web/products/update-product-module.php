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
$product_name  = trim($_POST['product-name']);
$description = trim($_POST['product-description']);
$status = trim($_POST['product-status']);
$file_path = trim($_POST['filepath']);
$price = trim($_POST['product-price']);
$promo = trim($_POST['promo']);
$promo_from = trim($_POST['fromDate']);
$promo_to = trim($_POST['toDate']);

if($promo == "Discounted"){
	$discounted = true;
}
else
$discounted = false;

if($discounted == true){
	$discount = trim($_POST['percentdiscount']);
	$update_product = "update product set Product_Name='$product_name', Description='$description', Price='$price', Status='$status', File_Path='$file_path', Discounted=$discounted, Discount_From='$promo_from',
			Discount_To='$promo_to', Discount='$discount' WHERE id=$id";
}
else
$update_product = "update product set Product_Name='$product_name', Description='$description', Price='$price', Status='$status', File_Path='$file_path' , Discounted=false, Discount_From=NULL,
			Discount_To=NULL, Discount=NULL WHERE id=$id";

if (!mysql_query($update_product,$con))
{
	//echo "id: ".$id;
	//die('Error: ' . mysql_error());
	
	header('Location: ../products/update');
	//header('Location: ../web/admin/product-profile.php');
}
else{
		header('Location: ../products');
}

mysql_close($con);
?>