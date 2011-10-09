<?php require("../../config/config.php"); ?>
<?php
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);

if(!isset($query))
	$query = "SELECT availed_service.date_availed, availed_service.therapist, service.service_name, service.category from availed_service join service on service.id=availed_service.service_id where availed_service.username='".$_SESSION['session_user']."' order by availed_service.date_availed desc";
$result = mysql_query("".$query);

mysql_close($con);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="../css/adminstyle.css" media="screen" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body onload="document.login_form.username.focus();">

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
        	<table id = "page-title">
            	<tr>
                	<td> <img src = "../images/purpletitle.png" /></td>
                    <td>Services Availed</td>
                </tr>
            </table>
            <form name="search" action="../services-availed/search.php" method="post">
             <table width="450" id = "service-search" cellspacing="10">
            	<tr>
                	<td width="251"><input type = "text" name = "service_searchfield" id = "service-product-searchfield"/></td>
                	<td width="97">
                    	<select name = "service_search_cat" id = "service-cat">                    		
                    		<option name = "">All</option>
                    		<option name = "">Date</option>
                    		<option name = "">Therapist</option>
                    		<option name = "">Service</option>
                    		<option name = "">Type</option>
                    	</select>
                    </td>
                    <td width="304"><input type = "submit" value = "Search" id = "search-but"/></td>
                </tr>
            </table>
            </form>
            <table width = "850" id  = "recordlist" cellspacing="0">
            
            	<th width="98">Date</th>
            	<th width="239">Therapist</th>
            	<th width="341">Name of Service</th>            	         
            	<th width="162">Type Of Service</th>
                 
                <?php
				while($row = mysql_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "</tr>";
				}
				?>
               
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
