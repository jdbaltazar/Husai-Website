<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("husai", $con);

$date  = trim($_POST['treatment-date']);
$therapist = trim($_POST['therapist']);
$service = trim($_POST['service']);
$remarks = trim($_POST['remarks']);
$username = trim($_POST['id']);
$name = trim($_POST['name']);

$add_availed_service = "insert into availed_service(Date, Therapist, Remarks, Username, Service_id) values('".$date."','".$therapist."','".$remarks."','".$username."', $service);";

if (!mysql_query($add_availed_service,$con))
{
	die('Error: ' . mysql_error());
}
else{
	header("Location: ../services-availed/index.php?id=".$username."&name=".$name);
}

mysql_close($con);

?>