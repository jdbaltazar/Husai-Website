<?php require("../../config/config.php"); ?>
<?php
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);

	$bdate = "";
	$username  = "";
	$password = "";
	$type = "";
	$status = "";
	$name = "";
	$address = "";
	$sex = "";
	$telephone = "";
	$businessAd = "";
	$businessPhone = "";
	$civilStatus = "";
	$occupation = "";
	$referredby = "";


$user_id = $_SESSION['session_user'];

$results = mysql_query("select * from account where Username = '$user_id'");

while($row = mysql_fetch_array($results)){
	$bdate = $row['Birthdate'];
	$password = $row['Password'];
	$name = $row['Name'];
	$address = $row['Address'];
	$telephone = $row['Telephone'];
	$businessAd = $row['Business_Address'];
	$businessPhone = $row['Business_Phone'];
	$occupation = $row['Occupation'];
	$referredby = $row['Referred_by'];
}

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
    
    	<div id = "header-left">  <img src = "../../images/purplelogo.jpg">  
        	
        </div>
        
        <div id = "header-right">Husai Health & Beauty Haven</div>
    
    	<div id = "upper-nav-border"> <img src = "../../images/purplebottom.png"> </div>
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
    	<div id = "upper-nav-border"> <img src = "../../images/purplebottom.png"> </div>
    <!-- InstanceBeginEditable name="content-left" -->
        <div id = "content-left-admin">
        	<table id = "page-title">
            	<tr>
                	<td> <img src = "../../images/purpletitle.png" /></td>
                    <td>Account Settings</td>
                </tr>
            </table>
            
            <div id="createacct">
				<form method="post" action="../../profile/update/">

					<p id="header-account">ACCOUNT INFORMATION</p>
					<div id="l2">
						<p>Username</p>
						<p class = "til">
							<input name="username" value="<?php echo $_SESSION['session_user'];?>" readonly="readonly" type="username" class="required"
								id="user2" />
						</p>
						<p>Password</p>
						<p class = "til">
							<input name="password" value="<?php echo $password ?>" type="password" class="required"
								id="user2" />
						</p>
						<p>Re-enter Password</p>
						<p class = "til">
							<input name="password2" value="<?php echo $password ?>" type="password" class="required"
								id="user2" />
						</p>
						
						
					</div>
					<p id="header-account">PERSONAL INFORMATION</p>
					<div id="l2">
						<p>Name</p>
						<p class = "til">
							<input name="name" value="<?php echo $name; ?>" type="text" class="required" id="user2" />
						</p>
						<p >Address</p>
						<p class = "til">
							<input name="address" type="text" value="<?php echo $address ?>" class="required" id="user2" />
							<br />
						</p>
						<p>Birthdate</p>
						<p class = "til">
							<select name="bmonth" class="date" id="month">
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
								for($i=1980; $i<=2000; $i++){
									echo "<option>".$i."</option>";
								}
								?>
							</select> <br />
						</p>
						<p>Sex</p>
						<p class = "til">
							<select name="sex" class="required" id="gender">
								<option value = "Male">Male</option>
								<option value = "Female">Female</option>
							</select> <br />
						</p>
						<p>Civil Status</p>
						<p class = "til">
							<select name="civilStatus" id="status">
								<option value = "Single">Single</option>
								<option value = "Married">Married</option>
								<option value = "Widowed">Widowed</option>
							</select> <br />
						</p>
						<p>Occupation</p>
						<p class = "til">
							<input type="text" name="occupation" value="<?php echo $occupation; ?>" id="user2" />
						</p>
						<p>Telephone No.</p>
						<p class = "til">
							<input type="text" name="telephone" value="<?php echo $telephone ?>" id="user2" />
						</p>

					</div>

					<p id="header-account">BUSINESS INFORMATION</p>
					<div id="l2">
						<p>Business Address</p>
						<p class = "til">
							<input type="username" name="businessAd" value="<?php echo $businessAd ?>" id="user2" />
						</p>
						<p>Business Contact No.</p>
						<p class = "til">
							<input type="text" name="businessPhone" value="<?php echo $businessPhone ?>" id="user2" />
						</p>
						<p>Referred by</p>
						<p class = "til">
							<input type="text" name="referredby" value="<?php echo $referredby ?>" id="user2" />
						</p>
						<p>
							<br />
						</p>
                      
						
					</div>
                    <p align="center">
							<input type="submit" value="Save Changes" name="submit"
								id="submit-account" />
						</p>
				</form>
                <br>
			</div>
            
             
    </div>
    <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="content-right" -->
       
      
        <!-- InstanceEndEditable -->
        <div id = "footer">
        	<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p> 
        </div>
    
    </div>
    
</body>
<!-- InstanceEnd --></html>
