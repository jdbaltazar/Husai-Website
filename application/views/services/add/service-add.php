<?php
include '../../../application/views/upload.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="../../../../Users/juanita/Desktop/HUSAI/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../../css/style.css"
	media="screen" />
<link rel="stylesheet" type="text/css"
	href="../../../css/adminstyle.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../../css/dialog_box.css"
	media="screen" />
<script type="text/javascript" src="../../js/dialog_box.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<script type="text/javascript"> 
  function checkExt(){
    var filename = document.getElementById('image').value;
    var filelength = parseInt(filename.length) - 3;
    var fileext = filename.substring(filelength,filelength + 3);
  
    // Check file extenstion
    if (fileext.toLowerCase() != "gif" && fileext.toLowerCase() != "jpg" && fileext.toLowerCase() != "png") {
      alert ("You can only upload png or gif or jpg images.");
      return false;
    } else {
      return true;
    }
}

  function reload()
  {

  var val1=document.imgUpload.service-name.value ;
  //var val2=document.form1.mname.value ;
  //var val3=document.form1.lname.value ;
  //// For radio button value to collect ///
  //for(var i=0; i < document.form1.type.length; i++){
 // if(document.form1.type[i].checked)
 // var val4=document.form1.type[i].value 
 // }

  self.location='service-add.php?service-name=' + val1;

  }
    
</script>
</head>

<body onload="document.imgUpload.service-name.focus();" >

	<div id="wrapper">

		<div id="header-left">
			<img src="../../images/purplelogo.jpg">
		
		</div>

		<div id="header-right">Husai Health & Beauty Haven</div>

		<div id="upper-nav-border">
			<img src="../../images/purplebottom.png">
		
		</div>
		<!-- InstanceBeginEditable name="navigation" -->
		<div id="nav">
			<ul>
				<li><a href="../../">Home</a></li>
				<li><a href="../../services">Services</a></li>
				<li><a href="../../products">Products</a></li>
				<li><a href="../../about">About</a></li>
				
				
				
				
				  <?php require '../../../application/views/includeaccountlinkforaddeditview.php';?>
			</ul>
		</div>
		<!-- InstanceEndEditable -->
		<div id="upper-nav-border">
			<img src="../../images/purplebottom.png">
		
		</div>
		<!-- InstanceBeginEditable name="content-left" -->
		<div id="content-left-admin">
			<table id="page-title">
				<tr>
					<td><img src="../../images/purpletitle.png" /></td>
					<td>Manage Services &raquo; Add Service</td>
				</tr>
			</table>
			<br><br>

					<p id="subtitle">ADD HUSAI SERVICE</p>

					<form name="imgUpload" action="" method="post"
						onsubmit="return validate_service_form()"
						enctype="multipart/form-data">
						<div id="add-table">
							<table cellspacing="10">
								<tr>
									<td align="right">Service Name:</td>
									<td><input type="text" name="service-name" id="text-field" />
									</td>
								</tr>
								<tr>
									<td align="right">Description:</td>
									<td><input type="text" name="service-desc" id="text-field" /></td>
								</tr>
								<tr>
									<td align="right">Category:</td>
									<td><select name="service-category" id="text-field">
											<option value="Face Service">Face Service</option>
											<option value="Body Service">Body Service</option>
											<option value="Hair Service">Hair Service</option>
									</select>
									</td>
								</tr>
								<tr>
									<tr>
										<td align="right">Status:</td>
										<td><select name="service-status" id="text-field">
												<option value="Available">Available</option>
												<option value="Not Available">Not Available</option>
										</select></td>
									</tr>
									<tr>
										<td align="right">Price:</td>
										<td><input type="text" name="service-price" id="text-field" />
										</td>
									</tr>

									<tr>
										<td align="right">Image:</td>
										<td><input name="filepath" type="text" id="text-field"
											readonly="readonly"   <?php if($ok==1){ ?>
											value="<?php echo $image; ?>"  <?php }?> /></td>
										<td align="left">&nbsp;</td>
									</tr>
									<td align="right">&nbsp;</td>
									<td><input type="file" name="image" id="image" /> <input
										type="submit" name="xsubmit_service" value="Upload"
										id="upload" onclick="btnClicked('Upload')" /></td>
									<td align="left">&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>

									<td><div>
										


									<?php
									//check if upload succesful then display it
									if($ok == 1) {
										?>
											<img src="<?php echo $filename; ?>" />
											
											
											
																						
											<?php
									}
									$ok = 0;
									?>
										</div></td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td align="center"><input type="submit" name="save-service"
										value="Save" id="upload" onclick="btnClicked('Save')" /></td>
									<td>&nbsp;</td>
								</tr>

							</table>

						</div>
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
