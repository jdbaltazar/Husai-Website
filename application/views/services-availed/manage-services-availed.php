<?php require("../../config/config.php");
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
$query = "SELECT availed_service.date_availed, availed_service.therapist, service.service_name, service.category, availed_service.remarks, availed_service.id from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_GET['id']."' order by availed_service.date_availed desc";
$result = mysql_query("".$query);
$services = mysql_query("SELECT id, Service_Name FROM service where Status='Available'");


if(!isset($service_availed_searchfield))
$service_availed_searchfield = "";
if(!isset($service_availed_search_cat))
$service_availed_search_cat = "";

mysql_close($con);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="../../../../Users/juanita/Desktop/HUSAI/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>

<link type="text/css" rel="stylesheet"
	href="../css/dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112"
	media="screen"></LINK>

<SCRIPT type="text/javascript"
	src="../js/dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
<link rel="stylesheet" type="text/css" href="../css/adminstyle.css"
	media="screen" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css"
	media="screen" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body onload="document.search.service_availed_searchfield.focus();" >

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
					<td width="619"><?php echo '<a href="../accounts/index.php?id='.$_GET['id'].'">'; ?>
						
						<?php echo $_GET['name']; ?></a> &raquo; Services Availed &raquo; <?php echo '<a href="../products-bought/index.php?id='.$_GET['id'].'&name='.$_GET['name'].'">'?>
						Products Bought </a></td>
				</tr>
			</table>

			<p>&nbsp;</p>
			<form name="search"
				action="../services-availed/search.php?id=<?php echo $_GET['id']?>&name=<?php echo $_GET['name']?>"
				method="post">
				<table width="450" id="service-search" cellspacing="10">
					<tr>
						<td width="251"><input type="text"
							name="service_availed_searchfield"
							id="service-product-searchfield"
							value="<?php echo $service_availed_searchfield; ?>" /></td>
						<td width="97"><select name="service_availed_search_cat"
							id="service-cat">
								<option name=""
									
									
									
								<?php if($service_availed_search_cat=='All'){ echo 'selected="selected"'; }?>>All</option>
								<option name=""
									
									
									
								<?php if($service_availed_search_cat=='Date'){ echo 'selected="selected"'; }?>>Date</option>
								<option name=""
									
									
									
								<?php if($service_availed_search_cat=='Therapist'){ echo 'selected="selected"'; }?>>Therapist</option>
								<option name=""
									
									
									
								<?php if($service_availed_search_cat=='Service'){ echo 'selected="selected"'; }?>>Service</option>
								<option name=""
									
									
									
								<?php if($service_availed_search_cat=='Type'){ echo 'selected="selected"'; }?>>Type</option>

								<option name=""
									
									
									
								<?php if($service_availed_search_cat=='Remarks'){ echo 'selected="selected"'; }?>>Remarks</option>
						</select>
						</td>
						<td width="304"><input type="submit" value="Search"
							id="search-but" /></td>
					</tr>
				</table>
			</form>


			<div id="add-service">
				<a href="../services-availed/add/index.php?id=<?php echo $_GET['id'].'&'.'name='.$_GET['name']; ?>">Add Service Availed </a>
			</div>

			<p>&nbsp;</p>

			<table width="850" id="recordlist" cellspacing="0">

				<th width="98">Date</th>
				<th width="239">Therapist</th>
				<th width="341">Name of Service</th>
				<th width="110">Type</th>
				<th width="300">Remarks</th>
				
				
				
				
				
				
				
				
				
				
                 
                <?php
				while($row = mysql_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td><a href=\"view/index.php?id=".$row[5]."\">".$row[2]."</a></td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "</tr>";
				}
				?>
               
            </table>

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
