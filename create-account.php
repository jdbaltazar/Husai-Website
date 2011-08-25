<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/HUSAI.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="css/style.css"
	media="screen" />

<script type="text/javascript">
<!--
var image1=new Image()
image1.src="images/1.jpg"
var image2=new Image()
image2.src="images/2.jpg"
var image3=new Image()
image3.src="images/3.jpg"
//-->
</script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>



	<div id="wrapper">

		<div id="top" class="thin-brdr-btm"></div>

		<div id="banner" class="thick-brdr-btm">
			<img src="images/logo.png" />
		</div>

		<!-- InstanceBeginEditable name="content" -->
		<div id="topnav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="husai-about.php">About</a></li>
				<li><a href="husai-products.php">Products</a></li>
				<li><a href="husai-services.php">Services</a></li>

			</ul>
		</div>
		<div id="content">

			<div id="createacct">
				<form method="post" action="add-account.php">

					<p id="head">ACCOUNT INFORMATION</p>
					<div id="l2">
						<p>Username</p>
						<p>
							<input name="username" type="username" class="required"
								id="user2" />
						</p>
						<p>Password</p>
						<p>
							<input name="password" type="password" class="required"
								id="user2" />
						</p>
						<p>Re-enter Password</p>
						<p>
							<input name="password2" type="password" class="required"
								id="user2" />
						</p>
						<p>Account Type</p>
						<p>
							<select name="type" class="required" id="user2">
								<option value="Husai Administrator">Husai Administrator</option>
								<option value="Husai Customer">Husai Customer</option>
							</select> <br />
						</p>
						<p>Account Status</p>
						<p>
							<select name="status" class="required" id="user2">
								<option value="Activated">Activated</option>
								<option value="Deactivated">Deactivated</option>
							</select> <br />
						</p>
					</div>
					<p id="head">PERSONAL INFORMATION</p>
					<div id="l2">
						<p>Name</p>
						<p>
							<input name="name" type="text" class="required" id="user2" />
						</p>
						<p>Address</p>
						<p>
							<input name="address" type="text" class="required" id="user2" />
							<br />
						</p>
						<p>Birthdate</p>
						<p>
							<select name="bmonth" class="date" id="bmonth">
								<option value="1">January</option>
								<option value="2">February</option>
								<option value="3">March</option>
								<option value="4">April</option>
								<option value="5">May</option>
							</select> <label for="bday"></label> <select name="bday"
								class="date" id="bday">
								<?php
								for($i=1; $i<=31; $i++){
									echo "<option>".$i."</option>";
								}
								?>
							</select> <label for="byear"></label> <select name="byear"
								class="date" id="byear">
								<?php
								for($i=1980; $i<=2000; $i++){
									echo "<option>".$i."</option>";
								}
								?>
							</select> <br />
						</p>
						<p>Sex</p>
						<p>
							<select name="sex" class="required" id="user2">
								<option>Male</option>
								<option>Female</option>
							</select> <br />
						</p>
						<p>Civil Status</p>
						<p>
							<select name="civilStatus" id="user2">
								<option>Single</option>
								<option>Married</option>
								<option>Widowed</option>
							</select> <br />
						</p>
						<p>Occupation</p>
						<p>
							<input type="text" name="occupation" id="user2" />
						</p>
						<p>Telephone No.</p>
						<p>
							<input type="text" name="telephone" id="user2" />
						</p>

					</div>

					<p id="head">BUSINESS INFORMATION</p>
					<div id="l2">
						<p>Business Address</p>
						<p>
							<input type="username" name="businessAd" id="user2" />
						</p>
						<p>Business Contact No.</p>
						<p>
							<input type="text" name="businessPhone" id="user2" />
						</p>
						<p>Referred by</p>
						<p>
							<input type="text" name="referredby" id="user2" />
						</p>
						<p>
							<br />
						</p>
						<p align="center">
							<input type="submit" value="create account" name="submit"
								id="submit" />
						</p>
					</div>

				</form>
			</div>

			<div id="slide_2">
				<p>
					<img src="images/1.jpg" name="slide" />
				</p>
				<p>
					<script>
                <!--
                //variable that will increment through the images
                var step=1
                function slideit(){
                //if browser does not support the image object, exit.
                if (!document.images)
                return
                document.images.slide.src=eval("image"+step+".src")
                if (step<3)
                step++
                else
                step=1
                //call function "slideit()" every 2.5 seconds
                setTimeout("slideit()",5000)
                }
                slideit()
                //-->
                </script>
				</p>
			</div>

			<div id="motto">" Our philosophy is to be the premier choice for all
				your health and beauty needs. Our staff is well trained and we only
				use the best ingredients on the market. Our goal is to offer you
				with the desirable treatments essential to make your wishes come
				into reality."</div>
		</div>
		<!-- InstanceEndEditable -->
		<div id="contact">
			<a
				href="http://www.facebook.com/pages/HUSAI-Health-Beauty-Haven/116544565063">
				<img src="images/f.png">
			
			</a>
		</div>

		<div id="footer">&copy; Husai Beauty Haven Inc. Reserved 2011</div>

	</div>

</body>
<!-- InstanceEnd -->
</html>
