<?php require("../../config/config.php"); ?>
<?php
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);

if(!isset($query))
	$query = "SELECT * FROM service ORDER BY Service_Name";
$result = mysql_query("".$query);

if(!isset($service_searchfield))
	$service_searchfield = "";
if(!isset($service_search_cat))
	$service_search_cat = "";

mysql_close($con);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>

<script language="JavaScript" type="text/javascript"> 

function checkAll(form){
	

if(form.allbox.checked)
   {
  		form.chuva.checked = true;
		form.chuva2.checked = true;
   }
else
	{
  		form.chuva.checked = false;
		form.chuva2.checked = false;		
	}
}
</script>

<link rel="stylesheet" type="text/css" href="../css/adminstyle.css"
	media="screen" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css"
	media="screen" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body onload="document.search_form.service_searchfield.focus();" >

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
					<td>Manage Services</td>
				</tr>
			</table>
			<p>&nbsp;</p>

			<form name="search_form" action="search.php" method="post">
				<table width="450" id="service-search" cellspacing="10">
					<tr>
						<td width="251"><input type="text" name="service_searchfield"
							id="service-product-searchfield"
							value="<?php echo $service_searchfield; ?>" /></td>
						<td width="97"><select name="service_search_cat" id="service-cat">
								<option name=""
									
									
									
								<?php if($service_search_cat=='All'){ echo 'selected="selected"'; }?>>All</option>
								<option name=""
									
									
									
								<?php if($service_search_cat=='Category'){ echo 'selected="selected"'; }?>>Category</option>
								<option name=""
									
									
									
								<?php if($service_search_cat=='Service'){ echo 'selected="selected"'; }?>>Service</option>
								<option name=""
									
									
									
								<?php if($service_search_cat=='Status'){ echo 'selected="selected"'; }?>>Status</option>
								<option name=""
									
									
									
								<?php if($service_search_cat=='Discounted'){ echo 'selected="selected"'; }?>>Discounted</option>
								<option name=""
									
									
									
								<?php if($service_search_cat=='Regular Price'){ echo 'selected="selected"'; }?>>Regular
									Price</option>
						</select>
						</td>
						<td width="304"><input type="submit" value="Search"
							id="search-but" />
						</td>
					</tr>
				</table>
			</form>

			<div id="add-service">
				<a href="../services/add">Add Service</a>
			</div>


			<br><br>
					<p id="header-servicelist">List of Services</p>
					<table width="850" id="table_header" cellspacing="0">
				<!--  <th width="62"><input type="checkbox" name="allbox"
								onClick="checkAll(this.form)" /></th> -->
				<th width="112">Category</th>
				<th width="295">Name of Service</th>
				<th width="121">Status</th>

			</table>
			
			
			
			
				
				
			<?php
			while($row = mysql_fetch_array($result)){
				echo '<a href ="../services/view/service-profile.php?id='.$row[0].'">';
				echo '<div>';
				echo '<table width="850" id="services-list" cellspacing="0">';
				echo "<tr>";
				echo "<td  width=\"112\">".$row["Category"]."</td>";
				echo "<td width=\"295\">".$row["Service_Name"]."</a></td>";
				echo "<td width=\"121\">".$row["Status"]."</td>";
				echo "</tr>";
				echo '</table>';
				echo '</div> </a>';
			}
			?>
		
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
