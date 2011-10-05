<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){

	if(isset($_POST['product_searchfield'])&&isset($_POST['product_search_cat'])){

		$product_searchfield = trim($_POST['product_searchfield']);
		$product_search_cat = $_POST['product_search_cat'];
		
		if($product_search_cat=="product"){
			if($product_searchfield!=""){
				$query = "SELECT * from product where product_name like '%".$product_searchfield."%' order by product_name";
			}else{
				$query = "SELECT * from product order by product_name";
			}
		}
		else if($product_search_cat=="Category"){
			if($product_searchfield!=""){
				$query = "SELECT * from product where category like '%".$product_searchfield."%' order by category";
			}else{
				$query = "SELECT * from product order by category";
			}
		}
		else if($product_search_cat=="Status"){
			if($product_searchfield!=""){
				$query = "SELECT * from product where status like '%".$product_searchfield."%' order by status";
			}else{
				$query = "SELECT * from product order by status";
			}
		}
		else if($product_search_cat=="Discounted"){
			if($product_searchfield!=""){
				$query = "SELECT * from product where discounted=1 && product_name like '%".$product_searchfield."%' order by product_name";
			}else{
				$query = "SELECT * from product where discounted=1 order by product_name";
			}
		}
		else if($product_search_cat=="Regular Price"){
			if($product_searchfield!=""){
				$query = "SELECT * from product where (discounted is null or discounted=0) && product_name like '%".$product_searchfield."%'";
			}else{
				$query = "SELECT * from product where (discounted is null or discounted=0) order by product_name";
			}
		}
		else{
			if($product_searchfield!=""){
				$query = "SELECT * from product where (product_name like '%".$product_searchfield."%' or category like '%".$product_searchfield."%' or status like '%".$product_searchfield."%' ) order by product_name";
			}else{
				$query = "SELECT * from product order by product_name";
			}
		}
	}

	if($_SESSION['session_user_type'] == 'Husai Customer'){
		include("../../application/views/products/products-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		include("../../application/views/products/manage-products.php");
	}
	exit;


}else{

	include("../actions/logout.php");
	exit;
}

?>