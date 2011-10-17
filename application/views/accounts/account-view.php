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
	$password = $row['Password'];
	$account_type = $row['Account_Type'];
	$account_status = $row['Status'];
	$name = $row['Name'];
	$address = $row['Address'];
	$birthday = $row['Birthdate'];
	$civil_status = $row['Civil_Status'];
	$sex = $row['Sex'];
	$occupation = $row['Occupation'];
	$contact_no = $row['Telephone'];
	$business_address = $row['Business_Address'];
	$business_contact_no = $row['Business_Phone'];
	$referred_by = $row['Referred_by'];

}

mysql_close($con);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="../../../../Users/juanita/Desktop/HUSAI/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/adminstyle.css"
	media="screen" />

<link rel="stylesheet" type="text/css" href="../css/customerprofile.css"
	media="screen" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css"
	media="screen" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

	<div id="wrapper">

		<div id="header-left">
			<img src="../images/purplelogo.jpg">
		
		</div>

		<div id="header-right">Husai Health & Beauty Haven</div>

		<div id="upper-nav-border">
			<img src="../images/purplebottom.png">
		
		</div>
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
		<div id="upper-nav-border">
			<img src="../images/purplebottom.png">
		
		</div>
		<!-- InstanceBeginEditable name="content-left" -->
		<div id="content-left-admin">
			<table width="929" id="page-title">
				<tr>
					<td width="37"><img src="../images/purpletitle.png" /></td>
					<td width="619">Customer Profile &raquo; <?php echo '<a href="../services-availed/index.php?id='.$username.'&name='.$name.'">'?>Services
						Availed</a> &raquo; <?php echo '<a href="../products-bought/index.php?id='.$username.'&name='.$name.'">'?>
						Products Bought </a></td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<form method="" action="">
				<p id="profiletable-header">Account Information</p>
				<table cellspacing="15" id="profile-name">

					<tr>
						<td width="159" id="field-name1">Username:</td>
						<td width="440" id="field-name2"><input type="text"
							name="username" value="<?php echo $username; ?>" /></td>
					</tr>
					<tr>
						<td width="159" id="field-name1">Password:</td>
						<td width="440" id="field-name2"><input type="password"
							name="password" value="<?php echo $password; ?>" /></td>
					</tr>
					<tr>
						<td width="159" id="field-name1">Re-enter Password:</td>
						<td width="440" id="field-name2"><input type="password"
							name="password2" value="<?php echo $password; ?>" /></td>
					</tr>
					<tr>
						<td id="field-name1">Account Type:</td>
						<td id="field-name2" align="left"><select name="account_type">
								<option value="Husai Customer"
									
								<?php if($account_type=='Husai Customer'){echo 'selected="selected"'; }?>>Husai
									Customer</option>
								<option value="Husai Administrator"
									
								<?php if($account_type=='Husai Administrator'){echo 'selected="selected"'; }?>>Husai
									Administrator</option>
						</select> <br /></td>
					</tr>
					<tr>
						<td id="field-name1">Account Status:</td>
						<td id="field-name2" align="left"><select name="account_status">
								<option value="Activated"
									
								<?php if($account_status=='Activated'){echo 'selected="selected"'; }?>>Activated</option>
								<option value="Deactivated"
									
								<?php if($account_status=='Deactivated'){echo 'selected="selected"'; }?>>Deactivated</option>
						</select> <br /></td>
					</tr>
				</table>

				<p id="profiletable-header">Personal Information</p>
				<table id="profile-name" cellspacing="15">

					<tr>
						<td width="158" id="field-name1">Name:</td>
						<td width="441" id="field-name2"><input type="text"
							name="customername" value="<?php echo $name; ?>" /></td>
					</tr>
					<tr>
						<td id="field-name1">Address:</td>
						<td id="field-name2"><input type="text" name="address"
							value="<?php echo $address; ?>" /></td>
					</tr>
					<tr>
						<td id="field-name1">Birthday:</td>
						<td id="field-name2" align="left"><select name="bmonth"
							class="date" id="month">
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
						<td id="field-name1">Sex:</td>
						<td id="field-name2" align="left"><select name="civilStatus"
							id="status">
								<option value="Male"
									
								<?php if($sex=='Male'){echo 'selected="selected"'; }?>>Male</option>
								<option value="Female"
									
								<?php if($sex=='Female'){echo 'selected="selected"'; }?>>Female</option>
						</select> <br /></td>
					</tr>
					<tr>
						<td id="field-name1">Civil Status:</td>
						<td id="field-name2" align="left"><select name="civilStatus"
							id="status">
								<option value="Single"
									
								<?php if($civil_status=='Single'){echo 'selected="selected"'; }?>>Single</option>
								<option value="Married"
									
								<?php if($civil_status=='Married'){echo 'selected="selected"'; }?>>Married</option>
								<option value="Widowed"
									
								<?php if($civil_status=='Widowed'){echo 'selected="selected"'; }?>>Widowed</option>
						</select> <br /></td>
					</tr>
					<tr>

						<td id="field-name1">Occupation:</td>
						<td id="field-name2"><input type="text" name="occupation"
							value="<?php echo $occupation; ?>" /></td>
					</tr>
					<tr>

						<td id="field-name1">Contact No.:</td>
						<td id="field-name2"><input type="text" name="contact"
							value="<?php echo $contact_no; ?>" /></td>
					</tr>

				</table>
				<p id="profiletable-header">Personal Information</p>
				<table id="profile-name" cellspacing="15">

					<tr>

						<td width="160" id="field-name1">Business Address:</td>
						<td width="439" id="field-name2"><input type="text"
							name="businessaddress" value="<?php echo $business_address; ?>" />
						</td>
					</tr>
					<tr>

						<td id="field-name1">Business Contact No.:</td>
						<td id="field-name2"><input type="text" name="businesscontact"
							value="<?php echo $business_contact_no; ?>" /></td>
					</tr>
					<tr>
						<td id="field-name1">Referred By:</td>
						<td id="field-name2"><input type="text" name="referencedby"
							value="<?php echo $referred_by; ?>" /></td>
					</tr>
				</table>
				<input type="submit" value="UPDATE" name="update"
					id="updatecustomerbutton">
			
			</form>

		</div>
		<!-- InstanceEndEditable -->
		<!-- InstanceBeginEditable name="content-right" -->

		<!-- InstanceEndEditable -->
		<div id="footer">
			<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p>
		</div>

	</div>

</body>
<!-- InstanceEnd -->
</html>
