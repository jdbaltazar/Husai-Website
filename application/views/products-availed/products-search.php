<?php


$search =  "";

//search goes here
if(isset($_POST["product-searchfield"]) && issest($_POST["product-cat"])){
	$search =  $_POST["product-searchfield"];
	//$category =  $_POST["product-cat"];
	
}

//$result = mysql_query("SELECT bought_product.date, product.product_name, bought_product.quantity, product.category from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$_SESSION['session_user']."' order by bought_product.date desc");

