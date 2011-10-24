<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("husai", $con);

$date  = trim($_POST['date-availed']);
$quantity = trim($_POST['quantity']);
$product = trim($_POST['product']);
$remarks = trim($_POST['remarks']);
$username = trim($_POST['username']);
$name = trim($_POST['name']);

$add_availed_service = "insert into bought_product(Date_Bought, Quantity, Remarks, Username, Product_id) values('".$date."','".$quantity."','".$remarks."','".$username."', $product);";

if (!mysql_query($add_availed_service,$con))
{
	die('Error: ' . mysql_error());
}
else{
	header("Location: ../products-bought/index.php?id=".$username."&name=".$name);
}

mysql_close($con);


?>