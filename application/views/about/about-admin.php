<?php 
require("../../config/config.php"); 
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);

$husai = mysql_query("SELECT * FROM Husai");
$husai_vision = mysql_query("SELECT * FROM Husai_Vision");
$husai_mission = mysql_query("SELECT * FROM Husai_Mission");


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
<link rel="stylesheet" type="text/css" href="../css/about.css"
	media="screen" />
<link rel="stylesheet" type="text/css" href="../css/adminstyle.css"
	media="screen" />
<link rel="stylesheet" type="text/css" href="../css/updatecss.css" media="screen" />
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
					<td>Manage About</td>
				</tr>
			</table>
			
            <div id = "vision-div">
            	<p id = "vision-header"> Vision </p>	
                <?php
				while($row = mysql_fetch_array($husai_vision)){
					echo '<p id = "vision-p">'.$row["Vision"].'<span><a href = "../about/delete-vision.php?id='.$row["id"].'"> remove</a></span></p>';
				}
				?>
                
                <form method="post" action="add-vision.php">
                    <table cellspacing="15">
                        	<tr>
                            	<td width="414"><input type = "text" name = "vision_entry" id = "newVisionText" /> </td>
                                <td width="77"><input type = "submit" value = "  Add Vision  " id = "addVisionButton" /> </td>
                            </tr>
                     </table>
                </form>
           </div>
			<div id = "mission-div">
            	<p id = "mission-header">Mission</p>
                <?php
				while($row = mysql_fetch_array($husai_mission)){
					echo '<p id = "mission-p">'.$row["Mission"].'<span><a href = "../about/delete-mission.php?id='.$row["id"].'"> remove</a></span></p>';
				}
				?>
                
                <form method="post" action="add-mission.php">
                	<table cellspacing="15">
                        	<tr>
                            	<td width="414"><input type = "text" name = "mission_entry" id = "newVisionText" /> </td>
                                <td width="77"><input type = "submit" value = "  Add Mission  " id = "addVisionButton" /> </td>
                            </tr>
                     </table>
                </form>               
                
                
            </div>
            
       
            <div id = "history-div">
                 <p id = "historylabel">History</p>
            
                <form method="post" action="update-history.php">
                    <textarea style="resize: none;" wrap="default"  name = "history_entry"><?php
				while($row = mysql_fetch_array($husai)){
					echo $row["History"];
				}
				?></textarea>
              
                    <input type="submit" value = "Update"/>
               </form>
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
