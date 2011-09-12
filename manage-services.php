<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location: login.php');
}
else{
	$username = $_SESSION['username'];

	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("husai", $con);

	$result = mysql_query("SELECT DISTINCT Description, Charge, Category FROM service"); 
	mysql_close($con);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css"
	media="screen">

</head>

<body>
	<div id="wrapper">
		<div id="leftside">
			<div id="fw-head">
				<h2 id="fw-title">Husai Health & Beauty Haven</h2>

			</div>

			<div id="content">
				<div id="title">
					<div id="cap">Manage Services</div>
				</div>
				<div id="con">
					<p id="admin-nav">
						<a href="">Add Service</a><span>|</span>
					</p>
				</div>

				<div id="account-list">
					<table border="5" cellpadding="10" cellspacing="10" align="center">
						<th>Description</th>
						<th>Charge</th>
						<th>Category</th>
						<?php 
						while($row = mysql_fetch_array($result))
						{						
						echo "<tr>";
						echo "<td>".$row['Description']."</td>";
						echo "<td>".$row['Charge']."</td>";
						echo "<td>".$row['Category']."</td>";
						echo "</tr>";
						}
						?>
					</table>
				</div>


			</div>
		</div>

		<div id="rightside">
			<div id="pic">
				<img src="images/bg-logo.gif">
			
			</div>

			<div id="nav">
				<p>
					<a href="index.php">Home</a>
				</p>
				<p>
					<a href="manage-services.php">Services</a>
				</p>
				<p>
					<a href="manage-products.php">Products</a>
				</p>
				<p>
					<a href="">About Us</a>
				</p>
				<p>
					<a href="manage-accounts.php">Manage Accounts</a>
				</p>

			</div>

			<div id="login">
				<p>
					Welcome
					<?php echo $username."!";?>
				</p>
				<table cellspacing="10">
					<tr>
						<td><img src="images/user.png">
						
						</td>
						<td><a href="logout-module.php">Log-out</a></td>
					</tr>
				</table>
			</div>

		</div>

	</div>
</body>
</html>
