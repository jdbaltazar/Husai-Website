<?php
include '../../../application/views/upload.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../../../../Users/juanita/Desktop/HUSAI/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../../css/style.css" media="screen" />

<link rel="stylesheet" type="text/css" href="../../../css/adminstyle.css" media="screen" />
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
                    <td>Manage Services &raquo; Add Service</td>
                </tr>
            </table>
          <br><br>
           <p id = "subtitle">ADD HUSAI PRODUCT</p>
            <form method = "post" action = "" >
              <div id = "add-table">
              	<table   cellspacing="10">
                    <tr>
                        <td align="right">Product Name: </td>
                        <td><input type = "text" name = "service-name"/ id = "text-field"></td>
                    </tr>
                    <tr>
                        <td align="right">Description: </td>
                        <td><input type = "text" name = "service-desc" id = "text-field"/></td>
                    </tr>
                    <tr>
                        <td align="right">Category: </td>
                        <td><select name="product-category" id="text-field">								
								<option value = "Face Product">Face Product</option>
                                <option value = "Body Product">Body Product</option>
								<option value = "Hair Product">Hair Product</option>
							</select> 
                        </td>
                    </tr> 
                    <tr>
                        <td align="right">Price: </td>
                        <td><input type = "text" name = "service-price" id = "text-field"/></td>
                    </tr>
                    
                    <tr>
                        <td align="right">Image: </td>
                        <td><input type = "text" name = "service-image" id = "text-field"/></td>
                        <td><input type = "submit" value = "Upload" id = "upload"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>               		
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="center"> <input type = "submit" value = "Save" id = "upload"/></td>               		
                        <td>&nbsp;</td>
                    </tr>
                      
                </table>                 
               </div>
            </form>
        </div>
    <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="content-right" -->
      
        <!-- InstanceEndEditable -->
        <div id = "footer">
        	<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p> 
        </div>
    
    </div>
    
</body>
<!-- InstanceEnd --></html>
