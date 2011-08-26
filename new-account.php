<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"> 
<link rel="stylesheet" type="text/css" href="css/popup.css" />

<script type="text/javascript">

function toggle(div_id) {
	var el = document.getElementById(div_id);
	if ( el.style.display == 'none' ) {	el.style.display = 'block';}
	else {el.style.display = 'none';}
}
function blanket_size(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportheight = window.innerHeight;
	} else {
		viewportheight = document.documentElement.clientHeight;
	}
	if ((viewportheight > document.body.parentNode.scrollHeight) && (viewportheight > document.body.parentNode.clientHeight)) {
		blanket_height = viewportheight;
	} else {
		if (document.body.parentNode.clientHeight > document.body.parentNode.scrollHeight) {
			blanket_height = document.body.parentNode.clientHeight;
		} else {
			blanket_height = document.body.parentNode.scrollHeight;
		}
	}
	var blanket = document.getElementById('blanket');
	blanket.style.height = blanket_height + 'px';
	var popUpDiv = document.getElementById(popUpDivVar);
	popUpDiv_height=blanket_height/2-150;
	popUpDiv.style.top = popUpDiv_height + 'px';
}
function window_pos(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportwidth = window.innerHeight;
	} else {
		viewportwidth = document.documentElement.clientHeight;
	}
	if ((viewportwidth > document.body.parentNode.scrollWidth) && (viewportwidth > document.body.parentNode.clientWidth)) {
		window_width = viewportwidth;
	} else {
		if (document.body.parentNode.clientWidth > document.body.parentNode.scrollWidth) {
			window_width = document.body.parentNode.clientWidth;
		} else {
			window_width = document.body.parentNode.scrollWidth;
		}
	}
	var popUpDiv = document.getElementById(popUpDivVar);
	window_width=window_width/2-150;
	popUpDiv.style.left = window_width + 'px';
}
function popup(windowname) {
	blanket_size(windowname);
	window_pos(windowname);
	toggle('blanket');
	toggle(windowname);		
}
</script>
</head>

<body>
<div id = "wrapper">
    	<div id = "leftside">
            <div id = "fw-head">   
              <h2 id = "fw-title">Husai Health & Beauty Haven</h2>
              
          </div>
             
             <div id = "content">
					<div id = "title">
                    	  <div id = "cap">Create Account</div>      
                    </div>     
                     
          <div id = "login-box">                    
                    	<form>
                        	<table cellspacing="10">
                            	<tr class="labels">
                            	  <td colspan="2"><div class="labeldiv">Account Information</div></td>
                           	  </tr>
                            	<tr>
                                	<td width="58" align = "right" class="labels">Username</td>
                                    <td width="216"><input type = "text" name = "email" class = "field" /></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Password</td>
                                  <td><input type = "password" name = "password" class = "field" /></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Confirm Password</td>
                                  <td><input type = "password" name = "password2" class = "field" /></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Account Type</td>
                                  <td align="left"><select name="acctType" class="menulist" id="acctType">
                                    <option>Husai Administrator</option>
                                    <option>Husai Customer</option>
                                  </select></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Account Status</td>
                                  <td align="left"><label for="status"></label>
                                    <select name="status" class="menulist" id="status">
                                      <option>Activated</option>
                                      <option>Deactivated</option>
                                  </select></td>
                                </tr>
                                <tr class="labels">
                                  <td colspan="2"><div class="labeldiv">Personal Information</div></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Name</td>
                                  <td><input type = "text" name = "name" class = "field" /></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Address</td>
                                  <td><input type = "text" name = "address" class = "field" /></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Birthdate</td>
                                  <td><input type = "text" name = "birthdate" class = "field" /></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Sex</td>
                                  <td align="left"><select name="acctType2" class="menulist" id="acctType2">
                                    <option>Male</option>
                                    <option>Female</option>
                                  </select></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Civil Status</td>
                                  <td align="left"><select name="acctType3" class="menulist" id="acctType3">
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Widowed</option>
                                  </select></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Telephone</td>
                                  <td><input type = "text" name = "telephone" class = "field" /></td>
                                </tr>
                                <tr class="labels">
                                  <td colspan="2"><div class="labeldiv">Work Information</div></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Occupation</td>
                                  <td><input type = "text" name = "occupation" class = "field" /></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Business Address</td>
                                  <td><input type = "text" name = "busAd" class = "field" /></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Business Telephone</td>
                                  <td><input type = "text" name = "busTel" class = "field" /></td>
                                </tr>
                                <tr>
                                  <td align = "right" class="labels">Referred by</td>
                                  <td><input type = "password" name = "referredBy" class = "field" /></td>
                                </tr>
                                <tr class="labels">
                                	<td colspan="2"><div class="labeldiv_footer">&nbsp;</div></td>
                                </tr>
                                <tr class="labels">
                                  <td colspan="2"></td>
                                </tr>
                                <tr>
                                	<td colspan="2" align="center" class="labels"><input type = "submit"  name = "submit" value = "Sign In" id = "submit" /></td>
                                </tr>
                            </table>
</form>
                    </div>    
                   
             </div>
    	</div>
        
        <div id ="rightside">
        	<div id = "pic"><img src = "images/bg-logo.gif"></div>
            
            <div id = "nav">	
            	<p><a href = "">Home</a></p>
            	<p><a href = "">Services</a></p>
                <p><a href = "">Products</a></p>
                <p><a href = "">About Us</a></p>
            	
            </div>
            
          
            
        </div>
        
    </div>
<div id="blanket" style="display:none;"></div>
<div id="popUpDiv" style="display:none;">
<a href="#" onclick="popup('popUpDiv')">Click Me To Close</a>
</div>
</body>
</html>
