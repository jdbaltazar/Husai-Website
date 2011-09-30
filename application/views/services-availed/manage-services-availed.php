
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../../../../Users/juanita/Desktop/HUSAI/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>

<link type="text/css" rel="stylesheet" href="../css/dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>

<SCRIPT type="text/javascript" src="../js/dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
<link rel="stylesheet" type="text/css" href="../css/adminstyle.css" media="screen" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
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
    	   <li><a href="../">Home</a></li>
				<li><a href="../services">Services</a></li>
				<li><a href="../products">Products</a></li>
				<li><a href="../about">About</a></li>
				
				
				
				
				  <?php require '../../application/views/includelinks.php';?>
  	      </ul>
  	    </div>
    	<!-- InstanceEndEditable -->
    	<div id = "upper-nav-border"> <img src = "../images/purplebottom.png"> </div>
    <!-- InstanceBeginEditable name="content-left" -->
        <div id = "content-left-admin">
       	  <table width="929" id = "page-title">
            	<tr>
                	<td width="39"> <img src = "../images/purpletitle.png" /></td>
                    <td width="821">Availed Services </td>
                    <td width="53" id = "viewSP"><a href = "manage-customer-profile.php">Back</a></td>
                </tr>
            </table>
   		 <p>&nbsp;</p>
         
   		 <p>&nbsp;</p>
         <p id ="add-availed-header">Add Availed Service</p>
         <div id = "add-availed-div">
			<table width="546" cellspacing="15">
            	<tr>
                	<td width="158" align="right">Date of Treatment:</td>                    
                	<td width="337"><input id = "input-from" type="text" value="2011/09/09" readonly name="fromDate" style = "width:80px"><span style = "margin-left:15px; "><input type="button" onclick="displayCalendar(document.forms[0].fromDate,'yyyy/mm/dd',this)" id = "calendar"></span></td>
                </tr>
                <tr>
                	<td align="right">Therapist:</td>
                    <td><input type="text" name = "therapist" id = "add-avail-input" /></td>
                </tr>
                <tr>
                	<td align="right">Service/Treatment:</td>
                    <td><input type="text" name = "therapist" id = "add-avail-input"/></td>
                </tr>
                <tr>
                	<td align="right">Type of Treatment:</td>
                    <td><select name = "" id = "service-cat">                    		
                    		<option name = "">Face</option>
                    		<option name = "">Body</option>
                    		<option name = "">Hair</option>                    		
                    	</select></td>
                </tr>
                <tr>
                	<td></td>
                	<td id = "add-td"><input type = "submit" value = "Add" id = "add-btn" /></td>
                </tr>
            </table>
         </div>
         
   		 <p>&nbsp;</p>
   		 <p>&nbsp;</p>
         
	<table width="450" id = "service-search" cellspacing="10">
            	<tr>
                	<td width="251"><input type = "text" name = "searchfield" id = "service-product-searchfield"/></td>
                	<td width="97">
                    	<select name = "service-cat" id = "service-cat">                    		
                    		<option name = "">All</option>
                    		<option name = "">Date</option>
                    		<option name = "">Therapist</option>
                    		<option name = "">Treatment</option>
                    		<option name = "">Product</option>
                    		<option name = "">Amount</option>
                    	</select>
                    </td>
                    <td width="304"><input type = "submit" value = "Search" id = "search-but"/></td>
                </tr>
            </table>
           
            <table width = "850" id  = "recordlist" cellspacing="0">
            
            	<th width="98">Date</th>
            	<th width="239">Therapist</th>
            	<th width="341">Name of Service</th>            	         
            	<th width="162">Type Of Service</th>
                 
                <tr>
                	<td>09/09/09</td>
                    <td>aaaaa</td>
                    <td>bbbbb</td>
                    <td>ccccc</td>
                   
                </tr>
               
            </table>
            
        </div>
    <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="content-right" -->
       
        <!-- InstanceEndEditable -->
        <div id = "footer">
        	<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p> 
        </div>
    
    </div>
    
</body>
<!-- InstanceEnd --></html>
