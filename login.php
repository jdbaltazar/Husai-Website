<?php 
if(isset($username)){
	header('location: admin-home.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
                    	  <div id = "cap">Sign In</div>      
                    </div>     
                     
                    <div id = "login-box">                    
                    	<form method="post" action="login-module.php">
                        	<table cellspacing="10">
                            	<tr>
                                	<td width="58" align = "right">Username</td>
                                    <td width="216"><input type = "text" name = "username" id = "field" /></td>
                                </tr>
                                <tr>
                                	<td align = "right"> Password</td>
                                    <td><input type = "password" name = "password" id = "field" /></td>
                                </tr>
                                <tr>
                                	<td></td>
                                    <td ><input type = "submit" name = "submit" value = "Sign In" id = "submit" /></td>
                                </tr>
                            </table>
                        </form>
                    </div>    
                   
             </div>
    	</div>
        
        <div id ="rightside">
        	<div id = "pic"><img src = "images/bg-logo.gif"></div>
            
            <div id = "nav">	
            	<p><a href = "index.php">Home</a></p>
            	<p><a href = "">Services</a></p>
                <p><a href = "">Products</a></p>
                <p><a href = "">About Us</a></p>
            	
            </div>
            
          
            
        </div>
        
    </div>
</body>
</html>
