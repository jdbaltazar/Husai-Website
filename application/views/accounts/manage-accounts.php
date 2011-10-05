<?php require("../../config/config.php"); ?>
<?php
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}


mysql_select_db(DB_NAME, $con);

if(!isset($query))
$query = "select Name, Username, Status from account WHERE Username!='".$_SESSION['session_user']."'";
if(!isset($account_searchfield))
$account_searchfield = "";

$result = mysql_query("".$query);

mysql_close($con);

//include '../php/page_accessor.php'
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
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
			<table id="page-title">
				<tr>
					<td><img src="../images/purpletitle.png" /></td>
					<td>Accounts</td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<p id="subtitle">Admin Account</p>
			<div id="admin-prof">
				<table width="345" cellspacing="20">
					<tr>
						<td width="99" align="right">Admin ID:</td>
						<td width="212"><?php echo "".$_SESSION['session_user'].""; ?></td>
					</tr>
					<tr>
						<td align="right">Password:</td>
						<td><a href="../profile/">[Change Password]</a></td>
					</tr>

				</table>
			</div>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<form name="search" action="../accounts/search.php" method="post">
				<table width="871" id="account-search" cellspacing="10">
					<tr>
						<td width="503"><p id="add-customer">
								<a href="../accounts/add">Add Customer Account</a>
							</p></td>
						<td width="258"><input type="text" name="account_searchfield"
							id="service-product-searchfield"
							value="<?php echo $account_searchfield; ?>" /></td>

						<td width="62"><input type="submit" value="Search" id="search-but" />
						</td>
					</tr>
				</table>
			</form>

			<p>&nbsp;</p>
			<p id="header-customer">Customers Accounts</p>


			<table id="customer-table" cellspacing="0">
				<th width="187">Customer Name</th>
				<th width="135">User ID</th>
				<th width="75">Status</th>
			</table>
                  
            <?php
        	$i = 0;
			while($row = mysql_fetch_array($result)){
				echo '<a href="../accounts/index.php?id='.$row[0].'">';
                echo '<div>';
                echo '<table id = "customer-table" cellspacing="0">';				
				echo '<tr ';
				if($i%2==0)
					echo 'class="trow1"';
				else
					echo 'class="trow2"';
				echo '<tr><td width="187">'.$row['Name']."</td><td width=\"135\">".$row['Username']."</td><td width=\"75\">".$row['Status']."</td></tr>";
				$i++;
			} 
         	echo  '</table>';
			echo '</div> </a>';	
           ?>
            
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
