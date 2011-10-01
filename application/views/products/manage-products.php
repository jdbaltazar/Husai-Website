<?php require("../../config/config.php"); ?>
<?php
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);

$result = mysql_query("SELECT * FROM product ORDER BY Product_Name");

mysql_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css"
	media="screen" />
<link rel="stylesheet" type="text/css" href="../css/adminstyle.css"
	media="screen" />
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

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
			<table id="page-title">
				<tr>
					<td><img src="../images/purpletitle.png" /></td>
					<td>Manage Products &raquo; What's New?</td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<table width="450" id="service-search" cellspacing="10">
				<tr>

					<td width="251"><input type="text" name="searchfield"
						id="service-product-searchfield" /></td>
					<td width="97"><select name="service-cat" id="service-cat">
							<option name="">All</option>
							<option name="">Face</option>
							<option name="">Body</option>
							<option name="">Hair</option>
					</select>
					</td>
					<td width="304"><input type="submit" value="Search" id="search-but" />
					</td>
				</tr>
			</table>

			<div id="add-service">
				<a href="../products/add">Add Product</a>
			</div>



			<br> <br>
					<p id="header-servicelist">List of Products</p>
					<form>
						<table width="850" id="services-list" cellspacing="0">
							<th width="62"><input type="checkbox" /></th>
							<th width="112">Category</th>
							<th width="295">Name of Product</th>
							<th width="121">Status</th>
							
							
							
							
							
					<?php

					while($row = mysql_fetch_array($result)){
						echo "<tr>";
						echo "<td><input type=\"checkbox\" /></td>";
						echo "<td>".$row["Category"]."</td>";
						echo "<td><a href = \"../products/view/product-profile.php?id=".$row[0]."\">".$row["Product_Name"]."</a></td>";
						echo "<td>".$row["Status"]."</td>";
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
