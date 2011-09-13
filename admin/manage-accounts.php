<?php 

$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}


mysql_select_db("husai", $con);

$husai_customers = mysql_query("select Name, Username, Status from account WHERE Type='Husai Customer';");

mysql_close($con);

include '../php/page_accessor.php'
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
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
                    <td> Accounts </td>
                </tr>
            </table>
        	<p>&nbsp;</p>
            <p id = "subtitle">Admin Account</p>
            <div id = "admin-prof">
  				<table width="345" cellspacing="15">
                    <tr>
                        <td width="99" align="right">Admin ID: </td>
                        <td width="212"><?php echo "".$_SESSION['session_user'].""; ?></td>
                    </tr>
                    <tr>
                        <td align="right">Password: </td>
                        <td><a href = "">[Change Password]</a></td>
                    </tr>    
                                             
                </table>
            </div> 
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p id = "add-customer"><a href = "add-customer-account.php">Add Customer Account</a></p>
            <p>&nbsp;</p>
            <p id = "header-customer">Customers Accounts</p>          
            <table id = "customer-table" cellspacing="0">
                    <th width="187">Customer Name</th>
                    <th width="135">User ID</th>
                    <th width="75">Status</th>
                    

        <?php
        $i = 0;
						while($row = mysql_fetch_array($husai_customers))
						{
							
/* 							echo '<tr ';
							
							if($i%2==0)
								echo 'class="trow1"';
							else
							echo 'class="trow2"'; */
							
							echo '<tr><td>'.$row['Name']."</td><td>".$row['Username']."</td><td>".$row['Status']."</td></tr>";
													
							$i++;
						}
		?>
    
           </table>        
            
        </div>
    <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="content-right" -->
        <div id = "content-right"> 
        	

        </div>
        <!-- InstanceEndEditable -->
        <div id = "footer">
        	<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p> 
        </div>
    
    </div>
    
</body>
<!-- InstanceEnd --></html>
