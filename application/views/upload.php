<?php require("../../../config/config.php"); 



$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);
?>

<?php

$ok = 0;
$image = "";
$src="";
$filename="";

if(isset($_POST['xsubmit_service']) || isset($_POST['xsubmit_product'])) {
	$image = $_FILES['image']['name'];
	
 	$query = "SELECT COUNT(File_Path) as num FROM product WHERE File_Path='$image'";
	
	$file_paths = mysql_fetch_array(mysql_query($query));
	
	$file_paths = $file_paths['num'];
	
	$uploadedfile = $_FILES['image']['tmp_name'];

	$file_name = stripslashes($_FILES['image']['name']);
	$extension = end(explode('.', $image));
	$name = basename($_FILES['image']['name'], '.'.$extension);
	$temp_name = basename($_FILES['image']['tmp_name'], '.'.$extension);
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

	$thumbnailwidth=150;
	$thumbnailheight=100;
	$tmp=imagecreatetruecolor($thumbnailwidth,$thumbnailheight);

	$zoomwidth=400;
	$zoomheight=400;
	$tmp1=imagecreatetruecolor($zoomwidth,$zoomheight);

	imagecopyresampled($tmp,$src,0,0,0,0,$thumbnailwidth,$thumbnailheight,
	$width,$height);

	imagecopyresampled($tmp1,$src,0,0,0,0,$zoomwidth,$zoomheight,
	$width,$height);


	if(isset($_POST['xsubmit_service'])){
		if ($file_paths >= 1 ){
			$filename = "../../upload/services/thumbnail/". $name."_".$file_paths.'.'.$extension;
			$filename1 = "../../upload/services/full_view/". $name."_".$file_paths.'.'.$extension;
			$image= $name."_".$file_paths.'.'.$extension;
		}
		else{
			$filename = "../../upload/services/thumbnail/". $_FILES['image']['name'];
			$filename1 = "../../upload/services/full_view/". $_FILES['image']['name'];
		}
	}
	else{
		if ($file_paths >= 1 ){
			$image= $_FILES['image']['name']."_".$file_paths;
			$filename = "../../upload/products/thumbnail/". $name."_".$file_paths.'.'.$extension;
			$filename1 = "../../upload/products/full_view/". $name."_".$file_paths.'.'.$extension;
			$image= $name."_".$file_paths.'.'.$extension;
		}
		else{
			$filename = "../../upload/products/thumbnail/". $_FILES['image']['name'];
			$filename1 = "../../upload/products/full_view/". $_FILES['image']['name'];
		}
	}

	if($image) {

		$copied = imagejpeg($tmp,$filename,100);
		$copied2 = imagejpeg($tmp1,$filename1,100);
		if (!$copied && !copied2) {

			$ok = 0;
		} else {
			$ok = 1;
		}
	}

	mysql_close($con);
	imagedestroy($src);
	imagedestroy($tmp);
	imagedestroy($tmp1);
}

else if(isset($_POST['save-service'])) {
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
		header('Location: ../../services');
	}

	mysql_close($con);

}

else if(isset($_POST['save-product'])) {
	$product_name  = trim($_POST['product-name']);
	$description = trim($_POST['product-desc']);
	$status = trim($_POST['product-status']);
	$price = trim($_POST['product-price']);
	$category = trim($_POST['product-category']);
	$filepath = trim($_POST['filepath']);

	if($filepath == ''){
		
	}
	$add_product = "insert into product(Product_Name, Description, Price, Status, Category, File_Path) VALUES('".$product_name."', '".$description."', ".$price.",'".$status."', '".$category."','".$filepath."');";

	
	if (!mysql_query($add_product,$con))
	{
		// 		die('Error: ' . mysql_error());
		header('Location: add-product.php');
	}
	else{
		header('Location: ../../products');
	}

	mysql_close($con);

}

else if(isset($_POST['save-product'])) {
	$product_name  = trim($_POST['product-name']);
	$description = trim($_POST['product-desc']);
	$status = trim($_POST['product-status']);
	$price = trim($_POST['product-price']);
	$category = trim($_POST['product-category']);
	$filepath = trim($_POST['filepath']);

	if($filepath == ''){
		
	}
	$add_product = "insert into product(Product_Name, Description, Price, Status, Category, File_Path) VALUES('".$product_name."', '".$description."', ".$price.",'".$status."', '".$category."','".$filepath."');";

	
	if (!mysql_query($add_product,$con))
	{
		// 		die('Error: ' . mysql_error());
		header('Location: add-product.php');
	}
	else{
		header('Location: ../../products');
	}

	mysql_close($con);

}
?>