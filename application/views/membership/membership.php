<?php require("../../config/config.php"); ?>
<?php
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);

$husai_main_result = mysql_query("SELECT * FROM Husai");
$husai_branch_result = mysql_query("SELECT * FROM Husai_Branch where Visibility='Visible'");
$member_get_result = mysql_query("SELECT * FROM Member_Get");
$member_avail_result = mysql_query("SELECT * FROM Member_Avail");

mysql_close($con);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="../Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="../css/adminstyle.css"
	media="screen" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css"
	media="screen" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body onload="document.login_form.username.focus();">

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
            
            <!-- if logged in 
            <li><a href = "services-availed.php">Availed Services</a></li>
            <li><a href = "products-availed.php">Availed Products</a></li>
            -->
  	    </ul>
		</div>

		<!-- InstanceEndEditable -->
		<div id="upper-nav-border">
			<img src="../images/purplebottom.png">
		
		</div>
		<!-- InstanceBeginEditable name="content-left" -->

		<!-- InstanceEndEditable -->
		<!-- InstanceBeginEditable name="content-right" -->

		<div id="content-left-admin">
			<table id="page-title">
				<tr>
					<td><img src="../images/purpletitle.png" /></td>
					<td></td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<p id="cap">Visit the nearest Husai Health and Beauty Haven branch
				and become a member..</p>
			<div id="membership-div">

				<p>&nbsp;</p>
				<p id="caption1">HUSAI PRIVILEGE CARD HAS ITS OWN REWARDS</p>

				<p id="caption2">You can get:</p>

				<div id="discountedget">
					
					
					
					
					
				<?php
				while($row = mysql_fetch_array($member_get_result)){
					echo ' <p>'. $row["Description"].'</p>';
				}
				?>
				</div>
				<p id="caption2">You can avail:</p>
				<div id="discountedavail">
					
					

				<?php
				while($row2 = mysql_fetch_array($member_avail_result)){
					echo '<p>'.$row2["Description"].'</p>';
				}
				?>
				</div>
			</div>


			<div id="contact-information">



			<?php while($row = mysql_fetch_array($husai_main_result)){?>
				<p id="branchname"><?php echo $row["Name"];?></p>
				<p class="italize"><?php echo $row["Address"];?></p>
				<p class="italize"><?php echo $row["Contact_Nos"];?></p>
				<p class="italize"><?php echo $row["Operating_Schedule"];?></p>
				<p class="italize"><?php echo $row["Email"];?></p>
				<p class="italize"><?php echo $row["Website"];?></p>
				
				
				
				
				<?php }?>
				
				
				<?php while($row = mysql_fetch_array($husai_branch_result)){?>
				<p>&nbsp;</p>
				<p id="branchname"><?php echo $row["Name"];?></p>
				<p class="italize"><?php echo $row["Address"];?></p>
				<p class="italize"><?php echo $row["Contact_Nos"];?></p>
				<p class="italize"><?php echo $row["Operating_Schedule"];?></p>
				<?php }?>
			</div>
		</div>

		<!-- InstanceEndEditable -->
		<div id="footer">
			<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p>
		</div>

	</div>

</body>
<!-- InstanceEnd -->
</html>
