<?php

require("../../../config/config.php");

$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

if(!(isset($_GET['id'])&&isset($_GET['name']))){
	header('Location: ../index.php');
}

mysql_select_db(DB_NAME, $con);

$query = "SELECT availed_service.date_availed, availed_service.therapist, service.service_name, service.category, availed_service.remarks, availed_service.id from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_GET['id']."' order by availed_service.date_availed desc";
$result = mysql_query("".$query);

while($row = mysql_fetch_array($results)){
	$service_name = $row['Service_Name'];
	$description = $row['Description'];
	$price = $row['Charge'];
	$status = $row['Status'];
	$discounted = $row['Discounted'];
	$discount = $row['Discount'];
}

mysql_close($con);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="../../css/dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
<link rel="stylesheet" type="text/css" href="../../css/adminstyle.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../../css/updatecss.css" media="screen" />
<SCRIPT type="text/javascript" src="../dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>

<script type="text/javascript">
function verifyDelete(form)
{
	if(confirm('Are you sure you want to delete?')){
		return true;
	}
	else {
		
		return false;
	}
}
</script>

<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body onload="document.login_form.username.focus();">

	<div id = "wrapper">
    
    	<div id = "header-left">  <img src = "../../images/purplelogo.jpg">  
        	
        </div>
        
        <div id = "header-right">Husai Health & Beauty Haven</div>
    
    	<div id = "upper-nav-border"> <img src = "../../images/purplebottom.png"> </div>
    	<!-- InstanceBeginEditable name="navigation" -->
    	<div id="nav">
    	  <ul>
            <li><a href="../../">Home</a></li>
				<li><a href="../../services">Services</a></li>
				<li><a href="../../products">Products</a></li>
				<li><a href="../../about">About</a></li>
				  <?php require '../../../application/views/includeaccountlinkforaddeditview.php';?>	
				
  	    </ul>
  	  </div>
    	<!-- InstanceEndEditable -->
    	<div id = "upper-nav-border"> <img src = "../../images/purplebottom.png"> </div>
    <!-- InstanceBeginEditable name="content-left" -->
        <div id = "content-left-admin">
        	<table width="929" cellspacing="7" id = "page-title">
            	<tr>
                	<td width="38"> <img src = "../../images/purpletitle.png" /></td>
                    <td width="822"> Update Service Availed &raquo;</td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
		<form method="post" action="">
         <table id ="update-prodservice-header" >
         	<tr>
            	<td width="363" align="right"> Update Service Availed</td>
            	<td width="175" align="right"><a href ="#" onclick=" return verifyDelete(this.form);" >delete</a></td>
            </tr>
         </table>
        
        
           <div id = "add-availed-div">
             <table width="546" cellspacing="15">
               <tr>
                 <td width="158" align="right">Date Availed:</td>                    
                 <td width="337"><input id = "input-from" type="text" value="2011/09/09" readonly name="date-availed" style = "width:80px" /><span style = "margin-left:15px; "><input type="button" onclick="displayCalendar(document.forms[0].fromDate,'yyyy/mm/dd',this)" id = "calendar" /></span></td>
                 </tr>
               <tr>
                 <td align="right">Product:</td>
                 <td><select name = "product" id = "service-cat">
                   <?php
								while($row = mysql_fetch_array($products))
								{
									echo "<option value=".$row['id'].">".$row['Product_Name']."</option>";
								}
								?>
  </select></td>
                 </tr>
               <tr>
                 <td align="right">Quantity:</td>
                 <td><input type="hidden" name="username" value="<?php echo $_GET['id'];?>"/><input type="hidden" name="name" value="<?php echo $_GET['name'];?>"/><input name = "quantity" type="text" id = "add-avail-input" size="10" maxlength="11" value = "current quantity"/></td>
                 </tr>
               <tr>
                 <td align="right">Remarks</td>
                 <td><input type="text" name = "remarks" id = "add-avail-input" value = "current remarks"/></td>
                 </tr>
               <tr>
                 <td></td>
                 <td id = "add-td"><input type = "submit" value = "Update" id = "add-btn" /></td>
                 </tr>
              </table>
           </div>
         </form>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            
    </div>
    <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="content-right" -->
       
       
        <!-- InstanceEndEditable -->
        <div id = "footer">
        	<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p> 
        </div>
    
    </div>
    
</body>
<!-- InstanceEnd --></html>
