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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../../../../Users/juanita/Desktop/HUSAI/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/adminstyle.css" media="screen" />

<link rel="stylesheet" type="text/css" href="../css/customerprofile.css" media="screen" />
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
                	<td width="37"> <img src = "../images/purpletitle.png" /></td>
                    <td width="619">Customer Profile </td>
                    <td width="119" id = "viewSP"><a href = "manage-availed-services.php">Services Availed</a></td>
                    <td width="134" id = "viewSP"><a href = "manage-availed-products.php">Products Bought</a></td>
                </tr>
            </table>
    <p>&nbsp;</p>
    		<form method = "" action = "">
            <p id = "profiletable-header">Account Information</p>
            <table  cellspacing="15" id = "profile-name">
            	 
            	<tr>
                	<td width="159" id = "field-name1">Username:</td>
                	<td width="440" id = "field-name2"><input type = "text" name = "username" /></td>
                </tr>
            	<tr>
                	<td id = "field-name1">Account status:</td>
                	<td id = "field-name2"><input type = "text" name = "accountstatus" /></td>                	
                </tr>    
             </table>
             
       <p id = "profiletable-header">Personal Information</p>
             <table id = "profile-name" cellspacing="15">
            	 
            	<tr>
                	<td width="158" id = "field-name1">Name:</td>
                	<td width="441" id = "field-name2"><input type = "text" name = "customername" /></td>
                </tr>
            	<tr>
                	<td id = "field-name1">Address:</td>
                	<td id = "field-name2"><input type = "text" name = "address" /></td>                	
                </tr>    
                <tr>
                	<td id = "field-name1">Birthday:</td>
                	<td id = "field-name2" align="left"><select name="bmonth" class="date" id="month">
								<option value="1">January</option>
								<option value="2">February</option>
								<option value="3">March</option>
								<option value="4">April</option>
								<option value="5">May</option>
								<option value="6">June</option>
								<option value="7">July</option>
								<option value="8">August</option>
								<option value="9">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
							</select> <label for="bday"></label> <select name="bday"
								class="date" id="day">
								<?php
								for($i=1; $i<=31; $i++){
									echo "<option>".$i."</option>";
								}
								?>
							</select> <label for="byear"></label> <select name="byear"
								class="date" id="year">
								<?php
								for($i=1940; $i<=2020; $i++){
									echo "<option>".$i."</option>";
								}
								?>
							</select> <br /></td>                	
                </tr> 
                <tr>
                	<td id = "field-name1">Civil Status:</td>
                	<td id = "field-name2" align="left"><select name="civilStatus" id="status">
								<option value = "Single">Single</option>
								<option value = "Married">Married</option>
								<option value = "Widowed">Widowed</option>
							</select> <br /></td>                	
                </tr> 
                <tr>
                	
                	<td id = "field-name1">Occupation:</td>
                	<td id = "field-name2"><input type = "text" name = "occupation" /></td>                	
                </tr> 
                <tr>
                	
                	<td id = "field-name1">Contact No.:</td>
                	<td id = "field-name2"><input type = "text" name = "contact" /></td>                	
                </tr> 
                
              </table>             
              <p id = "profiletable-header">Personal Information</p>
              <table id = "profile-name" cellspacing="15">
              
             	<tr>
                	
                	<td width="160" id = "field-name1">Business Address:</td>
                	<td width="439" id = "field-name2"><input type = "text" name = "businessaddress" /></td>                	
                </tr> 
                <tr>
                
                	<td id = "field-name1">Business Contact No.:</td>
                	<td id = "field-name2"><input type = "text" name = "businesscontact" /></td>                	
                </tr> 
                <tr>
                	<td id = "field-name1">Referenced By:</td>
                	<td id = "field-name2"><input type = "text" name = "referencedby" /></td>                	
                </tr> 
             </table>
             <input type = "submit" value = "UPDATE" name = "update" id = "updatecustomerbutton">
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
