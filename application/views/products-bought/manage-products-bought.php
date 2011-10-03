<?php require("../../config/config.php"); ?>
<?php
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
	$query = "SELECT bought_product.date, product.product_name, bought_product.quantity, product.category from bought_product join product on product.id=bought_product.product_id where bought_product.username='".$_GET['id']."' order by bought_product.date desc";
$result = mysql_query("".$query);
$products = mysql_query("SELECT id, Product_Name FROM product where Status='Available'");

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
        	<table width="929" id = "page-title">
            	<tr>
                	<td width="38"> <img src = "../images/purpletitle.png" /></td>
                    <td width="822">Products Bought &raquo; <?php echo $_GET['name']?></td>
                    <td width="53" id = "viewSP"><?php echo '<a href="../accounts/index.php?id='.$_GET['id'].'">'?>Back</a></td>
                </tr>
            </table>
            <p>&nbsp;</p>
         <p id ="add-availed-header">Add Bought Product</p>
         <form method="post" action="../save-bought-product.php">
           <div id = "add-availed-div">
             <table width="546" cellspacing="15">
               <tr>
                 <td width="158" align="right">Date Bought:</td>                    
                 <td width="337"><input id = "input-from" type="text" value="2011/09/09" readonly name="date-availed" style = "width:80px"><span style = "margin-left:15px; "><input type="button" onclick="displayCalendar(document.forms[0].fromDate,'yyyy/mm/dd',this)" id = "calendar"></span></td>
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
                 <td><input type="hidden" name="username" value="<?php echo $_GET['id'];?>"/><input type="hidden" name="id" value="<?php echo $_GET['name'];?>"/><input name = "quantity" type="text" id = "add-avail-input" size="10" maxlength="11"/></td>
                 </tr>
               <tr>
                 <td align="right">Remarks</td>
                 <td><input type="text" name = "remarks" id = "add-avail-input"/></td>
                 </tr>
               <tr>
                 <td></td>
                 <td id = "add-td"><input type = "submit" value = "Add" id = "add-btn" /></td>
                 </tr>
              </table>
           </div>
         </form>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <form name="search" action="../products-bought/search.php?id=<?php echo $_GET['id']?>&name=<?php echo $_GET['name']?>" method="post">
         <table width="450" id = "service-search" cellspacing="10">
            	<tr>
                	<td width="251"><input type = "text" name = "service_searchfield" id = "service-product-searchfield"/></td>
                	<td width="97">
                    	<select name = "product_search_cat" id = "service-cat">                    		
                    		<option name="">All</option>
								<option name="">Product</option>
								<option name="">Date</option>
								<option name="">Type</option>
                    	</select>
                    </td>
                    <td width="304"><input type = "submit" value = "Search" id = "search-but"/></td>
                </tr>
            </table>
            
            <table width = "850" id  = "recordlist" cellspacing="0">
            
            					<th width="98">Date</th>
				<th width="410">Product Name</th>
				<th width="143">Quantity</th>
				<th width="189">Type Of Product</th>

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
