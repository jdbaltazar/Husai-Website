<?php
//include 'connect.php';
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);

$service_name="";
$description="";
$price="";
$status = "";
$discounted = "";
$discount = "";

$service_id = $_GET['id'];
$results = mysql_query("select Service_Name, Description, Status, Charge, Discounted, Discount from service where id = $service_id");

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
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="../dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>

<SCRIPT type="text/javascript" src="../dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>



<script language="JavaScript" type="text/javascript"> 


function findselected() { 
   if (document.myform.mymenu.value == 'Not Discounted') {
      document.myform.calendar1.disabled=true;
      document.myform.calendar2.disabled=true;
      document.myform.percentdiscount.disabled=true;
   } else {
	   document.myform.calendar1.disabled=false;
	      document.myform.calendar2.disabled=false;
	      document.myform.percentdiscount.disabled=false;
   }
} 

function enableFields(form){
	

if(form.service.checked)
   {
  		form.desc1.disabled = false;
		form.period1.disabled = false;
   }
else{
		form.desc1.disabled = true;
		form.period1.disabled = true;
		form.elements["desc1"].value = '';
		form.elements["period1"].value = '';


}
if(form.service2.checked){
		form.percentagewhole.disabled = false;
		form.period2.disabled = false;
		form.elements["percentagedecimal"].value = '19';
	}  
else{
		form.desc2.disabled = true;
		form.period2.disabled = true;
		form.elements["desc2"].value = '';
		form.elements["period2"].value = '';
} 
}


</SCRIPT>

<link rel="stylesheet" type="text/css" href="../../css/adminstyle.css" media="screen" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

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
           <table id = "page-title">
            	<tr>
                	<td> <img src = "../../images/purpletitle.png" /></td>
                    <td>Service Description</td>
                </tr>
            </table>
            <p>&nbsp;</p>
            
            <div id = "service-product-pic">
            
            	<div id = "picture">
	            	<img src = "../../images/sample.jpg">
	            </div>
	            <p><a href = "#">Change Image</a></p>	
	        </div>
	        
             <div id = "service-desc">
            	<form method = "post" action = "../../update" name = "myform" id = "profile-form">          
	           
	                <table cellspacing="15">
	                    <tr>
	                        <td align="right">Service Name:</td>
	                        <td><input type="hidden" name="id" value="<?php echo $service_id;?>" /> <input type = "text" name = "service-name" value="<?php echo $service_name;?>"  id = "s1" /></td>
	                    </tr>
	                    <tr>
	                        <td align="right" >Description:</td>
	                        <td><input type = "text" name = "service-description" value="<?php echo $description;?>" id = "s1"></td>
	                    </tr>
	                    <tr>
	                        <td align="right" id =>Status:</td>
	                        <td >
	                        	<select name="service-status" id="s3">								
									<option <?php if($status == "Available"){echo 'selected="selected";'?><?php }?>>Available</option>
	                                <option <?php if($status == "Not Available"){echo 'selected="selected";'?><?php }?>>Not Available</option>								
								</select> 
	
	                        </td>
	                    </tr>
	                    <tr>
	                        <td align="right" >Price (Php):</td>
	                        <td ><input type="text" name = "service-price" value="<?php echo $price;?>" id = "s3"></td>
	                    </tr>
                       
	            		<tr>
	            			<td align="right">Promo:</td>
	            			<td>
	            				<select id = "s3" name = "mymenu" onchange="findselected()">
	            					<option <?php if($discounted == 1){echo 'selected="selected";'?><?php }?> value="Discounted">Discounted</option>
	            					<option <?php if($discounted == 0 || $discounted == NULL){echo 'selected="selected";'?><?php }?> value="Not Discounted">Not Discounted</option>
	            				</select>
	            			</td>
	            		</tr>
	            		
	                </table>
	                <table cellspacing="15" id = "promo-table">
	                	<tr>
	                    	<td width="200" align="right"><strong>Period Available:</strong></td>
	                    	<td width="342"></td>
	                    </tr>
	                    <tr>
	                    	
	                    	<td align="right">From:</td>
	                    	<td><input id = "input-from"type="text" value="2011/09/09" readonly="readonly" name="fromDate" style = "width:80px"><span style = "margin-left:15px; "><input type="button" name="calendar1" onclick="displayCalendar(document.forms[0].fromDate,'yyyy/mm/dd',this)" id = "calendar"></span></td>
	                        
	                    </tr>
	                    <tr>
	                    	<td align="right">To:</td>
	                    	<td><input id = "input-from"type="text" value="2011/09/09" readonly="readonly" name="toDate" style = "width:80px"><span style = "margin-left:15px; "><input type="button" name="calendar2" onclick="displayCalendar(document.forms[0].toDate,'yyyy/mm/dd',this)" id = "calendar"></span></td>
	                        
	                    </tr>
	                    <tr>
	                    	<td align="right">Percent Discount:</td>
	                    	<td id = "percentboxfont"><input name = "percentdiscount" <?php if($discounted == FALSE || $discounted == NULL){ echo 'disabled="disabled"' ?><?php }?> type="text" value="<?php echo $discount; ?>" id = "s2" maxlength="6" />
	                    	  %
	                    	</td>
	                    </tr>
	                </table>
	                <br>	            
	            	<input type="submit" value = "Update" id = "update-btn" />
            	</form>
		</div>  

 		           
  </div>
    <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="content-right" -->
        
        <!-- InstanceEndEditable -->
        <div id = "footer">
        	<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p> 
        </div>
    
    </div>
    
</body>
<!-- InstanceEnd --></html>