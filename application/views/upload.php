<?php
$ok = 0;
$image = "";
if(isset($_POST['xsubmit'])) {
	$image = $_FILES['image']['name'];
	$uploadedfile = $_FILES['image']['tmp_name'];
	
	$file_name = stripslashes($_FILES['image']['name']);
	$extension = end(explode('.', $image));
	$extension = strtolower($extension);
	
	if($extension=="jpg" || $extension=="jpeg" )
	{
		$uploadedfile = $_FILES['image']['tmp_name'];
		$src = imagecreatefromjpeg($uploadedfile);
	}
	else if($extension=="png")
	{
		$uploadedfile = $_FILES['image']['tmp_name'];
		$src = imagecreatefrompng($uploadedfile);
	}
	else
	{
		$src = imagecreatefromgif($uploadedfile);
	}
	

	list($width,$height) = getimagesize($uploadedfile);
	
	$newwidth=150;
	//$newheight=($height/$width)*$newwidth;
	$newheight=100;
	$tmp=imagecreatetruecolor($newwidth,$newheight);
	
	
	imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,
	$width,$height);
	
	$filename = "../upload/". $_FILES['image']['name'];
	
	
	
	if($image) {

	$copied = imagejpeg($tmp,$filename,100);
		if (!$copied) {

			$ok = 0;
		} else {
			$ok = 1;
		}
	}
	
	imagedestroy($src);
	imagedestroy($tmp);	
}

else if(isset($_POST['save-service'])) {
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("husai", $con);

	$service_name  = trim($_POST['service-name']);
	$description = trim($_POST['service-desc']);
	$status = trim($_POST['service-status']);
	$price = trim($_POST['service-price']);
	$category = trim($_POST['service-category']);
	$filepath = trim($_POST['filepath']);

	$add_service = "insert into service(Service_Name, Description, Status, Charge, Category, File_Path) VALUES('".$service_name."', '".$description."', '".$status."', ".$price.", '".$category."','".$filepath."');";

	if (!mysql_query($add_service,$con))
	{
 		die('Error: ' . mysql_error());
		//header('Location: add-service.php');
	}
	else{
		header('Location: manage-services-new.php');
	}

	mysql_close($con);

}

else if(isset($_POST['save-product'])) {
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("husai", $con);

	$product_name  = trim($_POST['product-name']);
	$description = trim($_POST['product-desc']);
	$status = trim($_POST['product-status']);
	$price = trim($_POST['product-price']);
	$category = trim($_POST['product-category']);
	$filepath = trim($_POST['filepath']);

	$add_product = "insert into product(Product_Name, Description, Price, Status, Category, File_Path) VALUES('".$product_name."', '".$description."', ".$price.",'".$status."', '".$category."','".$filepath."');";

	if (!mysql_query($add_product,$con))
	{
		// 		die('Error: ' . mysql_error());
		header('Location: add-product.php');
	}
	else{
		header('Location: manage-products-new.php');
	}

	mysql_close($con);

}
?>