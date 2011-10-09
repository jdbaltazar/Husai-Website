<?php require("../../config/config.php"); ?>
<?php
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);

$husai_main_result = mysql_query("SELECT * FROM Husai");
$husai_branch_result = mysql_query("SELECT * FROM Husai_Branch");
$member_get_result = mysql_query("SELECT * FROM Member_Get");
$member_avail_result = mysql_query("SELECT * FROM Member_Avail");

mysql_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../../../../Users/juanita/Desktop/HUSAI/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<link rel = "stylesheet" type="text/css" href = "../css/manage-membership.css" media="screen" />
<!-- InstanceEndEditable -->

<link rel="stylesheet" type="text/css" href="../css/adminstyle.css" media="screen" />
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
          <table id = "page-title">
            	<tr>
                	<td> <img src = "../images/purpletitle.png" /></td>
                    <td>Manage Membership</td>
                </tr>
            </table>
            <div id = "membership-div">
            <p>&nbsp;</p>
                 <p id = "caption1">HUSAI PRIVILEGE CARD HAS ITS OWN REWARDS</p>
              
                 <p id = "caption2">You can get:</p>
              
                 <div id = "discountedget">       
                <?php 
                
                while($row = mysql_fetch_array($member_get_result)){
					echo '<p>'.$row["Description"].' <span><a href = "../membership/delete-get.php?id='.$row["id"].'"> remove</a></span></p>';
				}
				?>
                    <form method="post" action="../membership/add-get.php">
                     	<table cellspacing="15">
                        	<tr>
                            	<td><input type = "text" name = "can_get_entry" id = "discountedgetfield" /></td>
                                <td><input type = "submit" value = "  Add to list  " id = "discountedgetbutton" /></td>
                            </tr>
                        </table>
                     </form>
                 </div>
                 
                 
                 <p id  = "caption2">You can avail:</p>
                 <div id = "discountedavail">
                 	<?php 
                 	while($row2 = mysql_fetch_array($member_avail_result)){
                 		echo '<p>'.$row2["Description"].' <span><a href = "../membership/delete-avail.php?id='.$row2["0"].'"> remove</a></span></p>';
                 	}
                 	?>
                    <form method="post" action="../membership/add-avail.php">
                     	<table cellspacing="15">
                        	<tr>
                            	<td><input type = "text" name = "can_avail_entry"" id = "discountedgetfield" /></td>
                                <td><input type = "submit" value = "  Add to list  " id = "discountedgetbutton" /></td>
                            </tr>
                        </table>
                     </form>
                 </div>
           
             
               
            </div> 
            
            
            <?php while($row = mysql_fetch_array($husai_main_result)){?>
             <p>&nbsp;</p>
             
            <div id = "addnewbranch">
               	   
                    <p id = "newBranchHeader">MAIN</p>
                    <form method="post" action="update-main.php">
                    	<table id = "addnewbrachtable" cellspacing="10">
                        	<tr>
                            	<td align="right">*Name :</td>
                            	<td><input type = "text" name = "name" value="<?php echo $row["Name"]?>"/></td>                                
                            </tr>
                            <tr>
                            	<td align="right">*Address :</td>
                            	<td><input type = "text" name = "address" value="<?php echo $row["Address"]?>"/></td>
                            </tr>
                            <tr>
                            	<td align="right">*Contact No/s. :</td>
                            	<td><input type = "text" name = "contact" value="<?php echo $row["Contact_Nos"]?>"/></td>
                            </tr>
                            <tr>
                            	<td align="right">*Operating Sched. :</td>
                            	<td><input type = "text" name = "schedule" value="<?php echo $row["Operating_Schedule"]?>"/></td>
                            </tr>
                            
                            <tr>
                            	<td align="right">*Email :</td>
                            	<td><input type = "text" name = "email" value="<?php echo $row["Email"]?>"/></td>
                            </tr>
                            
                            <tr>
                            	<td align="right">Website :</td>
                            	<td><input type = "text" name = "website" value="<?php echo $row["Website"]?>"/></td>
                            </tr>
                        </table>
                        <input type = "submit" value = "Update" id = "addbranchbutton" />
                    </form>
                    
              
              </div>
              <?php }?>
              <!-- update branches -->
              
              <?php while($row = mysql_fetch_array($husai_branch_result)){?>
             <p>&nbsp;</p>
              
              <div id = "addnewbranch">
               	   
                    <p id = "newBranchHeader">Update <?php echo $row["Name"]?></p>
                    <form method="post" action="update-branch.php">
                    	<table id = "addnewbrachtable" cellspacing="10">
                        	<tr>
                            	<td align="right">*Branch Name :</td>
                            	<td><input type = "text" name = "branchname" value="<?php echo $row["Name"]?>"/></td>                                
                            </tr>
                            <tr>
                            	<td align="right">*Branch Address :</td>
                            	<td><input type = "text" name = "branchaddress" value="<?php echo $row["Address"]?>"/></td>
                            </tr>
                            <tr>
                            	<td align="right">*Contact No/s. :</td>
                            	<td><input type = "text" name = "contact" value="<?php echo $row["Contact_Nos"]?>"/></td>
                            </tr>
                            <tr>
                            	<td align="right">*Operating Sched. :</td>
                            	<td><input type = "text" name = "schedule" value="<?php echo $row["Operating_Schedule"]?>"/></td>
                            </tr>
                            <tr>
                            	<td align="right">*Visibility :</td>
                            	<td align="left"><select name="visibility">
								<option <?php if($row["Visibility"]=='Visible'){ echo 'selected="selected"';}?> value = "Visible">Visible</option>
								<option <?php if($row["Visibility"]=='Hidden'){ echo 'selected="selected"';}?>value = "Hidden">Hidden</option>
							</select> </td>
                            </tr>
                        </table>
                        <input type = "hidden" name = "id" value="<?php echo $row["id"]?>"/>
                        <input type = "submit" value = "Update" id = "addbranchbutton" />
                        
                    </form>
                    
              
              </div>
              
              <?php }?>
              <!-- update branches -->
              
             <p>&nbsp;</p>
             
             
            <div id = "addnewbranch">
               	   
                    <p id = "newBranchHeader">Add New Branch</p>
                    <form method="post" action="add-branch.php">
                    	<table id = "addnewbrachtable" cellspacing="10">
                        	<tr>
                            	<td align="right">*Branch Name :</td>
                            	<td><input type = "text" name = "branchname"/></td>                                
                            </tr>
                            <tr>
                            	<td align="right">*Branch Address :</td>
                            	<td><input type = "text" name = "branchaddress"/></td>
                            </tr>
                            <tr>
                            	<td align="right">*Contact No/s. :</td>
                            	<td><input type = "text" name = "contact"/></td>
                            </tr>
                            <tr>
                            	<td align="right">*Operating Sched. :</td>
                            	<td><input type = "text" name = "schedule"/></td>
                            </tr>
                            <tr>
                            	<td align="right">*Visibility :</td>
                            	<td align="left"><select name="visibility">
								<option value = "Visible">Visible</option>
								<option value = "Hidden">Hidden</option>
							</select> </td>
                            </tr>
                        </table>
                        
                        <input type = "submit" value = "Add" id = "addbranchbutton" />
                        
                    </form>
                    
              
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
