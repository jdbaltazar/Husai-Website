<?php


session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){

	if(isset($_POST['product_bought_searchfield'])&&isset($_POST['product_bought_search_cat'])){

		$product_bought_searchfield = trim($_POST['product_bought_searchfield']);
		$product_bought_search_cat = $_POST['product_bought_search_cat'];

		if($_SESSION['session_user_type'] == 'Husai Customer'){
			$user = $_SESSION['session_user'];
		}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
			if(isset($_GET['id'])&&isset($_GET['name'])){
				$user = $_GET['id'];
			}
		}

		if($product_bought_search_cat=="Product"){
			if($product_bought_searchfield!=""){
				$query = "SELECT bought_product.date_bought, product.product_name, bought_product.quantity, product.category, bought_product.remarks from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$user."' and product.product_name like '%".$product_bought_searchfield."%' order by product.product_name";
			}else{
				$query = "SELECT bought_product.date_bought, product.product_name, bought_product.quantity, product.category, bought_product.remarks from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$user."' order by product.product_name";
			}
		}else if($product_bought_search_cat=="Date"){
			if($product_bought_searchfield!=""){
				$query = "SELECT bought_product.date_bought, product.product_name, bought_product.quantity, product.category, bought_product.remarks from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$user."' and bought_product.date_bought like '%".$product_bought_searchfield."%' order by bought_product.date_bought desc";
			}else{
				$query = "SELECT bought_product.date_bought, product.product_name, bought_product.quantity, product.category, bought_product.remarks from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$user."' order by bought_product.date_bought desc";
			}
		}else if($product_bought_search_cat=="Type"){
			if($product_bought_searchfield!=""){
				$query = "SELECT bought_product.date_bought, product.product_name, bought_product.quantity, product.category, bought_product.remarks from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$user."' and product.category like '%".$product_bought_searchfield."%' order by product.category";
			}else{
				$query = "SELECT bought_product.date_bought, product.product_name, bought_product.quantity, product.category, bought_product.remarks from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$user."' order by product.category";
			}
		}else if($product_bought_search_cat=="Remarks"){
			if($product_bought_searchfield!=""){
				$query = "SELECT bought_product.date_bought, product.product_name, bought_product.quantity, product.category, bought_product.remarks from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$user."' and bought_product.remarks like '%".$product_bought_searchfield."%' order by bought_product.remarks";
			}else{
				$query = "SELECT bought_product.date_bought, product.product_name, bought_product.quantity, product.category, bought_product.remarks from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$user."' order by bought_product.remarks";
			}
		}else{
			if($product_bought_searchfield!=""){
				$query = "SELECT bought_product.date_bought, product.product_name, bought_product.quantity, product.category, bought_product.remarks from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$user."' and (product.product_name like '%".$product_bought_searchfield."%' or bought_product.date_bought like '%".$product_bought_searchfield."%' or product.category like '%".$product_bought_searchfield."%') order by bought_product.date_bought desc";
			}else{
				$query = "SELECT bought_product.date_bought, product.product_name, bought_product.quantity, product.category, bought_product.remarks from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$user."' order by bought_product.date_bought desc";
			}
		}
	}

	if($_SESSION['session_user_type'] == 'Husai Customer'){
		include("../../application/views/products-bought/products-bought-all.php");
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		if(isset($_GET['id'])&&isset($_GET['name'])){
			include("../../application/views/products-bought/manage-products-bought.php");
		}else{
			header('Location: ../accounts/');
		}
	}
	exit;


}else{

	include("../actions/logout.php");
	exit;
}
?>