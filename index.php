<?php


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<script type="text/javascript">
<!--
var image1=new Image()
image1.src="Jellyfish.jpg"
var image2=new Image()
image2.src="Koala.jpg"
var image3=new Image()
image3.src="Lighthouse.jpg"
//-->
</script>

</head>

<body>



	<div id="wrapper">

		<div id="top" class="thin-brdr-btm"></div>

		<div id="banner" class="thick-brdr-btm">
			<img src="images/logo.png" />
		</div>


		<div id="topnav">
			<ul>
				<li><a href="index.htm">Home</a></li>
				<li><a href="about-husai.htm">About</a></li>
				<li><a href="husai-products.htm">Products</a></li>
				<li><a href="husai-services.htm">Services</a></li>

			</ul>
		</div>

		<div id="content">
			<form method="get" action="http:/facebook.com/">
				<div id="login">
					<p id="head">MEMBER LOGIN</p>
					<div id="l2">
						<p>Username</p>
						<p>
							<input type="username" name="username" id="user" />
						</p>
						<p>Password</p>
						<p>
							<input type="password" name="username" id="user" />
						</p>
						<p align="center">
							<input type="submit" value="login" id="submit" />
						</p>
					</div>
					<p id="l3">xxxxxxxxxxxxxxxxxxx</p>

				</div>
			</form>

			<img src="images/Jellyfish.jpg" name="slide" width="600" height="409" />
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


		</div>


		<div id="contact">
			<a
				href="http://www.facebook.com/pages/HUSAI-Health-Beauty-Haven/116544565063">
				<img src="images/f.png"> </a>
		</div>

		<div id="footer">&copy; Husai Beauty Haven Inc. Reserved 2011</div>

	</div>

</body>
</html>
