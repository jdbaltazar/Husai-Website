<?php
//include 'connect.php';
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("husai", $con);

if ($_POST['submit']){
	
	$bdate = $_POST['byear']."-".$_POST['bmonth']."-".$_POST['bday'];
	$add_acct = "insert into account VALUES('".$_POST['username']."', '".$_POST['password']."','".$_POST['name']."','".$_POST['address']."', '".$bdate."', '".$_POST['sex']."', '".$_POST['telephone']."','".$_POST['businessAd']."','".$_POST['businessPhone']."','".$_POST['civilStatus']."','".$_POST['occupation']."','".$_POST['referredby']."');";
	if (!mysql_query($add_acct,$con))
	{
		die('Error: ' . mysql_error());
	}
}

mysql_close($con);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<form method="post" action="add-account.php">
		<p>
			<label for="name">Name:</label> <input type="text" name="name"
				id="name" />
		</p>
		<p>
			<label for="address">Address:</label> <input type="text"
				name="address" id="address" />
		</p>
		<p>
			<label for="bmonth">Birthdate:</label> <select name="bmonth"
				id="bmonth">
			  <option value="1">January</option>
			  <option value="2">February</option>
			  <option value="3">March</option>
			  <option value="4">April</option>
			  <option value="5">May</option>
            </select> <label for="bday"></label> <select name="bday" id="bday">
			<?php
			for($i=1; $i<=31; $i++){
				echo "<option>".$i."</option>";
			}
			?>
			</select> <label for="byear"></label> <select name="byear" id="byear">
			<?php
			for($i=1980; $i<=2000; $i++){
				echo "<option>".$i."</option>";
			}
			?>
			</select>
		</p>
		<p>
			<label for="sex">Sex:</label> <select name="sex" id="sex">
				<option>Male</option>
				<option>Female</option>
			</select>
		</p>
		<p>
			<label for="telephone">Telephone:</label> <input type="text"
				name="telephone" id="telephone" />
		</p>
		<p>
			<label for="businessAd">Business Address:</label> <input type="text"
				name="businessAd" id="businessAd" />
		</p>
		<p>
			<label for="businessPhone">Business Telephone:</label> <input
				type="text" name="businessPhone" id="businessPhone" />
		</p>
		<p>
			<label for="civilStatus">Civil Status:</label> <select
				name="civilStatus" id="civilStatus">
				<option>Single</option>
				<option>Married</option>
			</select>
		</p>
		<p>
			Occupation: <input type="text" name="occupation" id="occupation" />
		</p>
		<p>
			Referred by: <input type="text" name="referredby" id="referredby" />
		</p>
		<p>
			<strong>Username: <input type="text" name="username" id="username" />
			</strong>
		</p>
		<p>
			<strong>Password: <input type="password" name="password"
				id="password" /> </strong>
		</p>
		<p>
			<strong>Re-enter Password: </strong> <input type="password"
				name="reenterPass" id="reenterPass" />
		</p>
		<p>
			<input type="submit" name="submit" id="submit" value="Submit" /> <input
				type="reset" name="clear" id="clear" value="Clear" />
		</p>
	</form>
</body>
</html>
