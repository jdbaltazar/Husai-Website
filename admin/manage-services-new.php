<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>

<script language="JavaScript"
type="text/javascript"> 

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
                    <td>Manage Services &raquo; What's New?</td>
                </tr>
            </table>
            <p>&nbsp;</p>
         
            <p id = "subtitle">ADD HUSAI SERVICE</p>
            
            <form method = "post" action = "" >
              <table width="345" id = "add-table">
                    <tr>
                        <td align="right">Service Name: </td>
                        <td><input type = "text" name = "service-name"/ id = "text-field"></td>
                    </tr>
                    <tr>
                        <td align="right">Price: </td>
                        <td><input type = "text" name = "service-price" id = "text-field"/></td>
                    </tr>
                    
                    <tr>
                        <td align="right">Description: </td>
                        <td><input type = "text" name = "service-desc" id = "text-field"/></td>
                    </tr>
                   	<tr>
                        <td align="right">Category: </td>
                        <td><select name="service-category" id="text-field">								
								<option value = "Face Service">Face Service</option>
                                <option value = "Body Service">Body Service</option>
								<option value = "Hair Service">Hair Service</option>
							</select> 
                        </td>
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
                  <p>&nbsp;</p>
               
              </form>
              <br><br>
              <p id = "header-servicelist">List of Services</p>  
              <form method = "" action = "#">
                  <table width="610" id = "services-list" cellspacing="0">
                    <th width="62"><input type = "checkbox" name = "allbox" onClick="checkAll(this.form)"/></th>
                    <th width="112">Category</th>
                    <th width="295">Name of Service</th>
                    <th width="121">Status</th>
                    <hr>
                    <tr>
                        <td><input type = "checkbox" name = "chuva"/></td>
                        <td>aa</td>
                        <td><a href = "service-profile.php">Chuvaness</a></td>               
                        <td>aa</td>
                        
                    </tr>
                     <tr>
                        <td><input type = "checkbox" name = "chuva2"/></td>
                        <td>aa</td>
                        <td><a href = "#">aa</a></td>               
                        <td>aa</td>
                        
                    </tr>
                    
                  </table>
            </form>
        </div>
    <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="content-right" -->
       <div id = "content-right"> 
        	<!--<div>            	
            	<ul>
                	<li><a href = "manage-services-new.php">&raquo; What's New?</a></li>
                    <li><a href = "manage-services-special.php">&raquo; Special / Discounted Offers</a></li>
                    <li><a href = "manage-services-face.php">&raquo; Face</a></li>
                    <li><a href = "manage-services-body.php">&raquo; Body</a></li>
                    <li><a href = "manage-services-hair.php">&raquo; Hair</a></li>
                    
                </ul>
            </div> -->

        </div>
        <!-- InstanceEndEditable -->
        <div id = "footer">
        	<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p> 
        </div>
    
    </div>
    
</body>
<!-- InstanceEnd --></html>
