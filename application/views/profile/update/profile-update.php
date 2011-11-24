<?php require("../../../config/config.php"); ?>
<?php
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);


$bdate = $_POST['byear']."-".$_POST['bmonth']."-".$_POST['bday'];
$username  = trim($_POST['username']);
$password = trim($_POST['password']);
$password2 = trim($_POST['password2']);
$name = trim($_POST['name']);
$address = trim($_POST['address']);
$sex = trim($_POST['sex']);
$telephone = trim($_POST['telephone']);
$businessAd = trim($_POST['businessAd']);
$businessPhone = trim($_POST['businessPhone']);
$civilStatus = trim($_POST['civilStatus']);
$occupation = trim($_POST['occupation']);
$referredby = trim($_POST['referredby']);


$update_acct = "update account set Password='$password', Name='$name', Address='$address', Birthdate='$bdate', Sex='$sex', Telephone='$telephone',
	Business_Address='$businessAd', Business_Phone='$businessPhone', Civil_Status='$civilStatus', Occupation='$occupation', Referred_by='$referredby' WHERE
	Username='$username'";

if (!mysql_query($update_acct,$con))
{
	die('Error: ' . mysql_error());
}
else{
	sleep(2);
	header('Location: ../../accounts');
}

mysql_close($con);
?>