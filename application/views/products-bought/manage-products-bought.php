<?php require("../../config/config.php"); ?>
<?php
if(!(isset($_GET['id'])&&isset($_GET['name']))){
	header('Location: ../index.php');
}

$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);

if(!isset($query))
$query = "SELECT bought_product.date_bought, product.product_name, bought_product.quantity, product.category, bought_product.remarks from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$_GET['id']."' order by bought_product.date_bought desc";
$result = mysql_query("".$query);
$products = mysql_query("SELECT id, Product_Name FROM product where Status='Available'");

if(!isset($product_bought_searchfield))
$product_bought_searchfield = "";
if(!isset($product_bought_search_cat))
$product_bought_search_cat = "";

mysql_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="../Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="../css/adminstyle.css"
	media="screen" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css"
	media="screen" />
	<link rel="stylesheet" type="text/css" href="../../css/dialog_box.css"
	media="screen" />
<script type="text/javascript" src="../../js/dialog_box.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body onload="document.search.product_bought_searchfield.focus();" >

	<div id="wrapper">

		<div id="header-left">
			<img src="../images/purplelogo.jpg">
		
		</div>

		<div id="header-right">Husai Health & Beauty Haven</div>

		<div id="upper-nav-border">
			<img src="../images/purplebottom.png">
		
		</div>
		<!-- InstanceBeginEditable name="navigation" -->
		<div id="nav">
			<ul>
				<li><a href="../">Home</a></li>
				<li><a href="../services">Services</a></li>
				<li><a href="../products">Products</a></li>
				<li><a href="../about">About</a></li>
				  <?php require '../../application/views/includelinks.php';?>
           
  	    </ul>
		</div>
		<!-- InstanceEndEditable -->
		<div id="upper-nav-border">
			<img src="../images/purplebottom.png">
		
		</div>
		<!-- InstanceBeginEditable name="content-left" -->
		<div id="content-left-admin">
			<table width="929" id="page-title">
				<tr>
					<td width="37"><img src="../images/purpletitle.png" /></td>
					<td width="619"><?php echo '<a href="../accounts/index.php?id='.$_GET['id'].'">'; ?><?php echo $_GET['name']; ?></a> &raquo; <?php echo '<a href="../services-availed/index.php?id='.$_GET['id'].'&name='.$_GET['name'].'">'?>Services
						Availed</a> &raquo; Products Bought</td>
				</tr>
			</table>

			<p>&nbsp;</p>
			
			
			<form name="search"
				action="../products-bought/search.php?id=<?php echo $_GET['id']?>&name=<?php echo $_GET['name']?>"
				method="post">
				<table width="450" id="service-search" cellspacing="10">
					<tr>
						<td width="251"><input type="text"
							name="product_bought_searchfield"
							id="service-product-searchfield"
							value="<?php echo $product_bought_searchfield; ?>" /></td>
						<td width="97"><select name="product_bought_search_cat"
							id="service-cat">
								<option name=""
									
								<?php if($product_bought_search_cat=='All'){ echo 'selected="selected"'; }?>>All</option>
								<option name=""
									
								<?php if($product_bought_search_cat=='Product'){ echo 'selected="selected"'; }?>>Product</option>
								<option name=""
									
								<?php if($product_bought_search_cat=='Date'){ echo 'selected="selected"'; }?>>Date</option>
								<option name=""
									
								<?php if($product_bought_search_cat=='Type'){ echo 'selected="selected"'; }?>>Type</option>
								
								<option name=""
									
								<?php if($product_bought_search_cat=='Remarks'){ echo 'selected="selected"'; }?>>Remarks</option>
						</select>
						</td>
						<td width="304"><input type="submit" value="Search"
							id="search-but" /></td>
					</tr>
				</table>

			<div id="add-service">
				<a href="../products-bought/add/index.php?id=<?php echo $_GET['id'].'&'.'name='.$_GET['name']; ?>">Add Product Bought </a>
			</div>
			<p>&nbsp;</p>
			
				<table width="850" id="recordlist" cellspacing="0">

					<th width="98">Date</th>
					<th width="410">Product Name</th>
					<th width="40">Qty</th>
					<th width="110">Type</th>
					<th width="300">Remarks</th>

                <?php
				while($row = mysql_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "</tr>";
				}
				?>
               
            </table>
			</form>
			
			
		</div>
		<!-- InstanceEndEditable -->
		<!-- InstanceBeginEditable name="content-right" -->


		<!-- InstanceEndEditable -->
		<div id="footer">
			<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p>
		</div>

	</div>

</body>
<!-- InstanceEnd -->
</html>
