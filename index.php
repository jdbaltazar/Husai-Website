<?php 
	session_start();
	if(isset($_SESSION['username'])){
		header('location: admin-home.php');
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Husai::Home</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"> 
</head>
<body>
<div id = "wrapper">
    	<div id = "leftside">
            <div id = "fw-head">   
              <h2 id = "fw-title">Husai Health & Beauty Haven</h2>
              
             </div>
             
             <div id = "content">
					<div id = "title">
                    	  <div id = "cap">Home</div>      

                    </div>        
                    <div id = "con">                    
                     content here...
                     </div>      
             </div>
    	</div>
        
        <div id ="rightside">
        	<div id = "pic"><img src = "images/bg-logo.gif"></div>
            
            <div id = "nav">	
            	<p><a href = "index.php">Home</a></p>
            	<p><a href = "manage-services.php">Services</a></p>
                <p><a href = "manage-products.php">Products</a></p>
                <p><a href = "">About Us</a></p>
            	
            </div>
            
            <div id = "login">
            	<p>Members Area</p>
                <table cellspacing="10">
                	<tr>
                    	<td><img src = "images/user.png"></td>
                        <td><a href = "login.php">Log-in</a></td>

                    </tr>
                </table>
            </div>
            
        </div>
        
    </div>
</body>
</html>
