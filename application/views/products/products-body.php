<?php require("../../config/config.php"); ?>
<?php
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);
$result = mysql_query("SELECT * FROM product WHERE Category='Body Product' ORDER BY Product_Name;");
mysql_close($con);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="C:\Users\COA\Desktop\HUSAI_FINALDESIGN\Templates\template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<?php include '../photo-viewer.php'?>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css"
	media="screen" />
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
		<div id="content-left">
			<table id="page-title">
				<tr>
					<td><img src="../images/purpletitle.png" /></td>
					<td>Products &raquo; Body</td>
				</tr>
			</table>

			<table width="530" border="2" cellspacing="15" cellpadding="0"
				id="search-result">










				<?php
				$i=0;
				$image = "../images/sample.jpg";
				while($row = mysql_fetch_array($result)){

					if ($i%3==0) {
						echo "<tr>";
					}
					if($row["File_Path"]!=null)
					$image = $row["File_Path"];
					
					echo '<td > <div> <a href="../../upload/products/full_view/'.$image.'" rel="prettyPhoto[gallery1]" title="'.$row["Description"].'"><img src = "../../upload/products/thumbnail/'.$image.'" alt="'.$row["Product_Name"].'"></a></div> <p><span style="font-weight:bold;">'.$row["Product_Name"].'</span> <br/> <span style="font-style:italic;">P'.$row["Price"].'<span></p> </td>';

					if ($i%3==3) {
						$i =0;
						echo "</tr>";
					}
					$i++;
				}
				?>

			</table>


		</div>
		<!-- InstanceEndEditable -->
		<!-- InstanceBeginEditable name="content-right" -->
		<div id="content-right">
			<div>
				<ul>
					<li><a href="../products">&raquo; Browse All</a></li>
					<li><a href="../products/discounted-products.php">&raquo; Special /
							Discounted Offers</a></li>
					<li><a href="../products/face-products.php">&raquo; Face</a></li>
					<li><a href="../products/body-products.php">&raquo; Body</a></li>
					<li><a href="../products/hair-products.php">&raquo; Hair</a></li>

				</ul>
			</div>
		</div>
		<!-- InstanceEndEditable -->
		<div id="footer">
			<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p>
		</div>

	</div>

</body>
<!-- InstanceEnd -->
</html>
