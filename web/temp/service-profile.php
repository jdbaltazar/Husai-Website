<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="../dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>

<SCRIPT type="text/javascript" src="../dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>



<script language="JavaScript" type="text/javascript"> 

function promo(form){
	
	var txt = document.getElementById('mymenu').options[document.getElementById('mymenu').selectedIndex].value;
	if(txt=='discounted'){
		document.getElementById('percentbox').disabled = 'disabled';
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

<link rel="stylesheet" type="text/css" href="../adminstyle.css" media="screen" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

	<div id = "wrapper">
    
    	<div id = "header-left">  <img src = "../images/purplelogo.jpg">  
        	
        </div>
        
        <div id = "header-right">Husai Health & Beauty Haven</div>
    
    	<div id = "upper-nav-border"> <img src = "../images/purplebottom.png"> </div>
    	<!-- InstanceBeginEditable name="navigation" -->
    	<div id="nav">
    	  <ul>
    	    <li><a href = "manage-home.php">Home</a></li>
    	    <li><a href = "manage-services-new.php">Services</a></li>
    	    <li><a href = "manage-products-new.php">Products</a></li>
    	    <li><a href = "manage-about.php">About</a></li>
            <li><a href = "manage-accounts.php">Accounts</a></li>
  	      </ul>
  	    </div>

    	<!-- InstanceEndEditable -->
    	<div id = "upper-nav-border"> <img src = "../images/purplebottom.png"> </div>
    <!-- InstanceBeginEditable name="content-left" -->
        <div id = "content-left-admin">
           <table id = "page-title">
            	<tr>
                	<td> <img src = "../images/purpletitle.png" /></td>
                    <td>Service Description</td>
                </tr>
            </table>
            <p>&nbsp;</p>
            
            <div id = "service-product-pic">
            
            	<div id = "picture">
	            	<img src = "../images/sample.jpg">
	            </div>
	            <p><a href = "#">Change Image</a></p>	
	        </div>
	        
             <div id = "service-desc">
            	<form method = "" action = "" name = "myform" id = "profile-form">          
	           
	                <table cellspacing="15">
	                    <tr>
	                        <td align="right">Service Name:</td>
	                        <td><input type = "text" name = "service-name"  id = "s1" /></td>
	                    </tr>
	                    <tr>
	                        <td align="right" >Description:</td>
	                        <td><input type = "text" name = "service-description" id = "s1"></td>
	                    </tr>
	                    <tr>
	                        <td align="right" id =>Status:</td>
	                        <td >
	                        	<select name="service-status" id="s3">								
									<option value = "available">Available</option>
	                                <option value = "unavailable">Unavailable</option>								
								</select> 
	
	                        </td>
	                    </tr>
	                    <tr>
	                        <td align="right" >Price (Php):</td>
	                        <td ><input type="text" name = "service-price" value = "" id = "s3"></td>
	                    </tr>
                        <tr>
	            			<td align="right">Type:</td>
	            			<td>
	            				<select id = "s3">
	            					<option name = "">Old Service</option>
	            					<option name = "">New Service</option>
	            				</select>
	            			</td>
	            		</tr>
	            		<tr>
	            			<td align="right">Promo:</td>
	            			<td>
	            				<select id = "s3" name = "mymenu" onchange="promo(this.form);">
	            					<option name = "notdiscounted">Not Discounted</option>
	            					<option name = "discounted">Discounted</option>
	            				</select>
	            			</td>
	            		</tr>
	            		
	                </table>
	                <table cellspacing="15" id = "promo-table">
	                	<tr>
	                    	<td width="200" align="right">Period Available:</td>
	                    	<td width="342"></td>
	                    </tr>
	                    <tr>
	                    	
	                    	<td align="right">From:</td>
	                    	<td><input id = "input-from"type="text" value="2011/09/09" readonly name="fromDate" style = "width:80px"><span style = "margin-left:15px; "><input type="button" onclick="displayCalendar(document.forms[0].fromDate,'yyyy/mm/dd',this)" id = "calendar"></span></td>
	                        
	                    </tr>
	                    <tr>
	                    	<td align="right">To:</td>
	                    	<td><input id = "input-from"type="text" value="2011/09/09" readonly name="toDate" style = "width:80px"><span style = "margin-left:15px; "><input type="button" onclick="displayCalendar(document.forms[0].toDate,'yyyy/mm/dd',this)" id = "calendar"></span></td>
	                        
	                    </tr>
	                    <tr>
	                    	<td align="right">Percent Discount:</td>
	                    	<td id = "percentboxfont">
	                    		<select id = "percentbox" name = "percentagewhole" >
	                    			<?php 
										for($i=0;$i<100;$i++){
											echo "<option name = ".$i.">".$i."</option>";	
											
										}
	                    			?>
	                    		</select>.
	                    		<select id = "percentbox" name = "percentagedecimal" >
	                    			<?php 
										for($i=0;$i<100;$i++){
											echo "<option name = ".$i.">".$i."</option>";	
											
										}
	                    			?>
	                    		</select>%
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
