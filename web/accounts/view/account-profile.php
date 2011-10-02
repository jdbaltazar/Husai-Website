
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../../../../Users/juanita/Desktop/HUSAI/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<?php 

$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("husai", $con);

$username = "";
$account_status = "";
$name = "";
$address = "";
$birthday = "";
$civil_status = "";
$occupation = "";
$contact_no = "";
$business_address = "";
$business_contact_no = "";
$referred_by = "";

$user_id = $_GET['id'];

$results = mysql_query("select * from account where Username = '$user_id'");

while($row = mysql_fetch_array($results)){
	$username = $row['Username'];
	$account_status = $row['Status'];
	$name = $row['Name'];
	$address = $row['Address'];
	$birthday = $row['Birthdate'];
	$civil_status = $row['Civil_Status'];
	$occupation = $row['Occupation'];
	$contact_no = $row['Telephone'];
	$business_address = $row['Business_Address'];
	$business_contact_no = $row['Business_Phone'];
	$referred_by = $row['Referred_by'];
	
}

mysql_close($con);

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../../../css/adminstyle.css" media="screen" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../../css/style.css" media="screen" />
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
       	  <table width="929" id = "page-title">
            	<tr>
                	<td width="37"> <img src = "../../images/purpletitle.png" /></td>
                    <td width="619">Customer Profile </td>
                    <td width="119" id = "viewSP"><a href = "manage-availed-services.php">Services Availed</a></td>
                    <td width="134" id = "viewSP"><a href = "manage-availed-products.php">Products Bought</a></td>
                </tr>
            </table>
    <p>&nbsp;</p>
            <p id = "profiletable-header">Account Information</p>
            <table  cellspacing="15" id = "profile-name">
            	 
            	<tr>
                	<td width="159" id = "field-name1">Username:</td>
                	<td width="440" id = "field-name2"><?php echo $username; ?></td>
                </tr>
            	<tr>
                	<td id = "field-name1">Account status:</td>
                	<td id = "field-name2"><?php echo $account_status; ?></td>                	
                </tr>    
             </table>
             
       <p id = "profiletable-header">Personal Information</p>
             <table id = "profile-name" cellspacing="15">
            	 
            	<tr>
                	<td width="158" id = "field-name1">Name:</td>
                	<td width="441" id = "field-name2"><?php echo $name; ?></td>
                </tr>
            	<tr>
                	<td id = "field-name1">Address:</td>
                	<td id = "field-name2"><?php echo $address; ?></td>                	
                </tr>    
                <tr>
                	<td id = "field-name1">Birthday:</td>
                	<td id = "field-name2"><?php echo $birthday; ?></td>                	
                </tr> 
                <tr>
                	<td id = "field-name1">Civil Status:</td>
                	<td id = "field-name2"><?php echo $civil_status; ?></td>                	
                </tr> 
                <tr>
                	
                	<td id = "field-name1">Occupation:</td>
                	<td id = "field-name2"><?php echo $occupation; ?></td>                	
                </tr> 
                <tr>
                	
                	<td id = "field-name1">Contact No.:</td>
                	<td id = "field-name2"><?php echo $contact_no; ?></td>                	
                </tr> 
                
              </table>             
              <p id = "profiletable-header">Personal Information</p>
              <table id = "profile-name" cellspacing="15">
              
             	<tr>
                	
                	<td width="160" id = "field-name1">Business Address:</td>
                	<td width="439" id = "field-name2"><?php echo $business_address; ?></td>                	
                </tr> 
                <tr>
                
                	<td id = "field-name1">Business Contact No.:</td>
                	<td id = "field-name2"><?php echo $business_contact_no; ?></td>                	
                </tr> 
                <tr>
                	<td id = "field-name1">Referred By:</td>
                	<td id = "field-name2"><?php echo $referred_by; ?></td>                	
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
