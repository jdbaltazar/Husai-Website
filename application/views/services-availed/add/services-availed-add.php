<?php require("../../../config/config.php");
if(!(isset($_GET['id'])&&isset($_GET['name']))){
	header('Location: ../../index.php');
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

mysql_close($con);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>

<link type="text/css" rel="stylesheet"
	href="../../../css/dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112"
	media="screen"></LINK>

<SCRIPT type="text/javascript"
	src="../../../js/dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
<link rel="stylesheet" type="text/css"
	href="../../../css/adminstyle.css" media="screen" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../../css/style.css"
	media="screen" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

	<div id="wrapper">

		<div id="header-left">
			<img src="../../../images/purplelogo.jpg">

		</div>

		<div id="header-right">Husai Health & Beauty Haven</div>

		<div id="upper-nav-border">
			<img src="../../../images/purplebottom.png">

		</div>
		<!-- InstanceBeginEditable name="navigation" -->
		<div id="nav">
			<ul>
				<li><a href="../../../">Home</a></li>
				<li><a href="../../../services">Services</a></li>
				<li><a href="../../../products">Products</a></li>
				<li><a href="../../../about">About</a></li>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				  <?php require '../../../application/views/includelinks.php';?>
  	      </ul>
		</div>
		<!-- InstanceEndEditable -->
		<div id="upper-nav-border">
			<img src="../../../images/purplebottom.png">

		</div>
		<!-- InstanceBeginEditable name="content-left" -->
		<div id="content-left-admin">
			<table width="929" id="page-title">
				<tr>
					<td width="37"><img src="../../../images/purpletitle.png" /></td>
					<td width="619"><?php echo '<a href="../../../accounts/index.php?id='.$_GET['id'].'">'; ?>
						
						
						
						
						
						<?php echo $_GET['name']; ?></a> &raquo; <?php echo '<a href="../../../services-availed/index.php?id='.$_GET['id'].'&name='.$_GET['name'].'">'?>
						Services Availed </a> &raquo; Add Service Availed </td>
				</tr>
			</table>

			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p id="add-availed-header">Add Availed Service</p>
			<form action="../../save-availed-service.php" method="post">
				<div id="add-availed-div">
					<table width="546" cellspacing="15">
						<tr>
							<td width="158" align="right">Date of Treatment:</td>
							<td width="337"><input id="input-from" type="text"
								value="2011/09/09" readonly name="treatment-date"
								style="width: 80px"><span style="margin-left: 15px;"><input
										type="button"
										onclick="displayCalendar(document.forms[0].fromDate,'yyyy/mm/dd',this)"
										id="calendar">
								
								</span>
							
							</td>
						</tr>
						<tr>
							<td align="right">Therapist:</td>
							<td><input type="hidden" name="id"
								value="<?php echo $_GET['id'];?>" /><input type="hidden"
								name="name" value="<?php echo $_GET['name'];?>" /><input
								type="text" name="therapist" id="add-avail-input" /></td>
						</tr>
						<tr>
							<td align="right">Service/Treatment:</td>
							<td><select name="service" id="service-cat">
							<?php
							while($row = mysql_fetch_array($services))
							{
								echo "<option value=".$row['id'].">".$row['Service_Name']."</option>";
							}
							?>
							</select></td>
						</tr>
						<tr>
							<td align="right">Remarks:</td>
							<td><input name="remarks" type="text" id="add-avail-input"
								maxlength="500" /></td>
						</tr>
						<tr>
							<td></td>
							<td id="add-td"><input type="submit" value="Add" id="add-btn" />
							</td>
						</tr>
					</table>
				</div>
			</form>

			<p>&nbsp;</p>
			<p>&nbsp;</p>



			<div id="footer">
				<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p>
			</div>

		</div>

</body>
<!-- InstanceEnd -->
</html>
