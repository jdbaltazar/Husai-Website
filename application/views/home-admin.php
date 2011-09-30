<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="../../../../Users/juanita/Desktop/HUSAI/Templates/template-husai.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<script type="text/javascript">
<!--
var image1=new Image()
image1.src="../images/2.jpg"
var image2=new Image()
image2.src="../images/3.jpg"
var image3=new Image()
image3.src="../images/4.jpg"
//-->
</script>
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
				 <li><a href = "..">Home</a></li>
    	    <li><a href = "services">Services</a></li>
    	    <li><a href = "products">Products</a></li>
    	    <li><a href = "about">About</a></li>
              <?php include 'includelinks.php';?>
  	    </ul>
			<?php include 'includelogout.php';?>
		</div>
		<!-- InstanceEndEditable -->
		<div id="upper-nav-border">
			<img src="../images/purplebottom.png">
		
		</div>
		<!-- InstanceBeginEditable name="content-left" -->
		<div id="content-left">
			<table id="page-title">
				<tr>
					<td><img src="../images/purpletitle.png" /></td>
					<td>Home</td>
				</tr>
			</table>

			<div id="about-div">News here...</div>
			<div id="slideshow">
				<p>
					<img src="1.jpg" name="slide" />
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
		</div>
		<!-- InstanceEndEditable -->
		<!-- InstanceBeginEditable name="content-right" -->
		<div id="content-right">
			<div id="loggedin-div">
				<p>
					Hello <a href="userprofile.php"><?php echo $_SESSION['session_user']; ?></a>!
				</p>
			</div>

		</div>

		<div id="quote">
			<!--" Our philosophy is to be the premier choice for all your health and beauty needs. Our staff is				                        well trained and we only use the best ingredients on the market. Our goal is to offer you with the                         desirable treatments essential to make your wishes come into reality."-->
			" Your doorway to a young, fabulous & healthy Lifestyle!"
		</div>
		<div id="like">
			<a
				href="http://www.facebook.com/pages/HUSAI-Health-Beauty-Haven/116544565063">
				<img src="../images/f.png" /> </a>
		</div>
		<!-- InstanceEndEditable -->
		<div id="footer">
			<p id="fw-foottext" class="fw-footertext">Copyright ©2011</p>
		</div>

	</div>

</body>
<!-- InstanceEnd -->
</html>
