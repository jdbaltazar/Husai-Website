<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<script language="JavaScript"
type="text/javascript"> 

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
		form.desc2.disabled = false;
		form.period2.disabled = false;
	}  
else{
		form.desc2.disabled = true;
		form.period2.disabled = true;
		form.elements["desc2"].value = '';
		form.elements["period2"].value = '';
} 
}
//-->
</SCRIPT>
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
        <div id = "content-left">
           <table id = "page-title">
            	<tr>
                	<td> <img src = "../images/purpletitle.png" /></td>
                    <td>Prodcut Desciption</td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <form method = "" action = "" name = "myform">
            <div id = "service-product-pic">
            	<a href = "#"><img src = "../images/sample.jpg"></a>
            </div>
            <div id = "service-desc">
                <table cellspacing="15">
                    <tr>
                        <td align="right">Product Name:</td>
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
                        <td ><input type = "text" name = "service-price" value = "12" id = "s2"></td>
                    </tr>
                </table>
			</div>  
            <hr />

            <p class = "bold">Other Description:</p>          
            
            <div id = "check-new-service">
            	<table cellspacing="10">
                	<tr>
                    	<td><input type = "checkbox" name = "service" onClick = "enableFields(this.form)" /></td>
                    	<td class = "bold">Check if new service</td>
                    </tr>
                  
                </table>
                <table cellspacing="10"id = "new-other">
                	<tr>
                    	<td align = "right">Description:</td>
                    	<td><input type="text" name = "desc1" disabled="disabled"/></td>
                    </tr>
                   	<tr>
                    	<td align="right">Period Available:</td>
                    	<td><input type="text" name = "period1" disabled="disabled" /></td>
                    </tr>
                  
                </table>
            </div>
			<div id = "check-new-service">
            	<table cellspacing="10">
                	<tr>
                    	<td><input type = "checkbox" name = "service2" onClick = "enableFields(this.form)"></td>
                    	<td class = "bold">Check if discounted service</td>
                    </tr>
                  
                </table>
                <table cellspacing="10" id = "new-other">
                	<tr>
                    	<td align="right">Description:</td>
                    	<td><input type="text" name = "desc2" disabled="disabled"/></td>
                    </tr>
                   	<tr>
                    	<td align="right">Period Available:</td>
                    	<td><input type="text" name = "period2" disabled="disabled"/></td>
                    </tr>
                  
                </table>
            </div>
			<br>	            
            <input type="submit" value = "Update" id = "update-btn" />
            
 		</form>           
        </div>
    <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="content-right" -->
        <div id = "content-right"> sadsads </div>
        <!-- InstanceEndEditable -->
        <div id = "footer">
        	<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p> 
        </div>
    
    </div>
    
</body>
<!-- InstanceEnd --></html>
