// global variables //
var TIMER = 5;
var SPEED = 10;
var WRAPPER = 'wrapper';

// calculate the current window width //
function pageWidth() {
	return window.innerWidth != null ? window.innerWidth
			: document.documentElement && document.documentElement.clientWidth ? document.documentElement.clientWidth
					: document.body != null ? document.body.clientWidth : null;
}

// calculate the current window height //
function pageHeight() {
	return window.innerHeight != null ? window.innerHeight
			: document.documentElement && document.documentElement.clientHeight ? document.documentElement.clientHeight
					: document.body != null ? document.body.clientHeight : null;
}

// calculate the current window vertical offset //
function topPosition() {
	return typeof window.pageYOffset != 'undefined' ? window.pageYOffset
			: document.documentElement && document.documentElement.scrollTop ? document.documentElement.scrollTop
					: document.body.scrollTop ? document.body.scrollTop : 0;
}

// calculate the position starting at the left of the window //
function leftPosition() {
	return typeof window.pageXOffset != 'undefined' ? window.pageXOffset
			: document.documentElement && document.documentElement.scrollLeft ? document.documentElement.scrollLeft
					: document.body.scrollLeft ? document.body.scrollLeft : 0;
}

// build/show the dialog box, populate the data and call the fadeDialog function
// //
function showDialog(title, message, type, autohide) {
	if (!type) {
		type = 'error';
	}
	var dialog;
	var dialogheader;
	var dialogclose;
	var dialogtitle;
	var dialogcontent;
	var dialogmask;
	if (!document.getElementById('dialog')) {
		dialog = document.createElement('div');
		dialog.id = 'dialog';
		dialogheader = document.createElement('div');
		dialogheader.id = 'dialog-header';
		dialogtitle = document.createElement('div');
		dialogtitle.id = 'dialog-title';
		dialogclose = document.createElement('div');
		dialogclose.id = 'dialog-close'
		dialogcontent = document.createElement('div');
		dialogcontent.id = 'dialog-content';
		dialogmask = document.createElement('div');
		dialogmask.id = 'dialog-mask';
		document.body.appendChild(dialogmask);
		document.body.appendChild(dialog);
		dialog.appendChild(dialogheader);
		dialogheader.appendChild(dialogtitle);
		dialogheader.appendChild(dialogclose);
		dialog.appendChild(dialogcontent);
		;
		dialogclose.setAttribute('onclick', 'hideDialog()');
		dialogclose.onclick = hideDialog;
	} else {
		dialog = document.getElementById('dialog');
		dialogheader = document.getElementById('dialog-header');
		dialogtitle = document.getElementById('dialog-title');
		dialogclose = document.getElementById('dialog-close');
		dialogcontent = document.getElementById('dialog-content');
		dialogmask = document.getElementById('dialog-mask');
		dialogmask.style.visibility = "visible";
		dialog.style.visibility = "visible";
	}
	dialog.style.opacity = .00;
	dialog.style.filter = 'alpha(opacity=0)';
	dialog.alpha = 0;
	var width = pageWidth();
	var height = pageHeight();
	var left = leftPosition();
	var top = topPosition();
	var dialogwidth = dialog.offsetWidth;
	var dialogheight = dialog.offsetHeight;
	var topposition = top + (height / 3) - (dialogheight / 2);
	var leftposition = left + (width / 2) - (dialogwidth / 2);
	dialog.style.top = topposition + "px";
	dialog.style.left = leftposition + "px";
	dialogheader.className = type + "header";
	dialogtitle.innerHTML = title;
	dialogcontent.className = type;
	dialogcontent.innerHTML = message;
	var content = document.getElementById(WRAPPER);
	dialogmask.style.height = content.offsetHeight + 'px';
	dialog.timer = setInterval("fadeDialog(1)", TIMER);
	if (autohide) {
		dialogclose.style.visibility = "hidden";
		window.setTimeout("hideDialog()", (autohide * 1000));
	} else {
		dialogclose.style.visibility = "visible";
	}
}

// hide the dialog box //
function hideDialog() {
	var dialog = document.getElementById('dialog');
	clearInterval(dialog.timer);
	dialog.timer = setInterval("fadeDialog(0)", TIMER);
}

// fade-in the dialog box //
function fadeDialog(flag) {
	if (flag == null) {
		flag = 1;
	}
	var dialog = document.getElementById('dialog');
	var value;
	if (flag == 1) {
		value = dialog.alpha + SPEED;
	} else {
		value = dialog.alpha - SPEED;
	}
	dialog.alpha = value;
	dialog.style.opacity = (value / 100);
	dialog.style.filter = 'alpha(opacity=' + value + ')';
	if (value >= 99) {
		clearInterval(dialog.timer);
		dialog.timer = null;
	} else if (value <= 1) {
		dialog.style.visibility = "hidden";
		document.getElementById('dialog-mask').style.visibility = "hidden";
		clearInterval(dialog.timer);
	}
}

// error-trapping
function validate_account_form() {
	var ERROR_MESSAGE = "Invalid input. Check the following field/s: <br /><br />";
	var Name = document.forms["form1"]["name"].value;
	var username = removeSpaces(document.forms["form1"]["username"].value);
	var password = removeSpaces(document.forms["form1"]["password"].value);
	var repassword = removeSpaces(document.forms["form1"]["password2"].value);
	var name = removeSpaces(document.forms["form1"]["name"].value);
	var address = removeSpaces(document.forms["form1"]["address"].value);

	if (username == null || username == "" || password == null
			|| password == "" || repassword == null || repassword == ""
			|| name == null || name == "" || address == null || address == "") {

		if (username == null || username == "")
			ERROR_MESSAGE += "Username <br />";
		if (password == null || password == "")
			ERROR_MESSAGE += "Password <br />";
		if (repassword == null || repassword == "")
			ERROR_MESSAGE += "Re-enter Password <br />";
		if (name == null || name == "")
			ERROR_MESSAGE += "Name <br />";
		if (address == null || address == "")
			ERROR_MESSAGE += "Address <br />";

		showDialog('Error', ERROR_MESSAGE, 'error');
		return false;
	}
	else if(password !== repassword){
		showDialog('Error', 'Passwords do not match!', 'error');
		return false;
	}
	else
		showDialog('Success', 'New account for ' + Name
				+ ' successfully saved!', 'success', 2);
}

function validate_service_form() {
	var ERROR_MESSAGE = "Invalid input. Check the following field/s: <br /><br />";
	var serviceName = document.forms["imgUpload"]["service-name"].value;
	var service_name = removeSpaces(document.forms["imgUpload"]["service-name"].value);
	var service_description = removeSpaces(document.forms["imgUpload"]["service-desc"].value);
	var service_price = removeSpaces(document.forms["imgUpload"]["service-price"].value);

	if (service_name == null || service_name == ""
			|| service_description == null || service_description == ""
			|| service_price == null || service_price == "" || isNaN(service_price) == true) {

		if (service_name == null || service_name == "")
			ERROR_MESSAGE += "Service Name <br />";
		if (service_description == null || service_description == "")
			ERROR_MESSAGE += "Description <br />";
		if (service_price == null || service_price == "" || isNaN(service_price) == true)
			ERROR_MESSAGE += "Price <br />";

		showDialog('Error', ERROR_MESSAGE, 'error');
		return false;
	}

	else
		showDialog('Success', 'New service "' + serviceName
				+ '" successfully saved!', 'success', 2);

}

function validate_product_form() {
	var ERROR_MESSAGE = "Invalid input. Check the following field/s: <br /><br />";
	var productName = document.forms["imgUpload"]["product-name"].value;
	var product_name = removeSpaces(document.forms["imgUpload"]["product-name"].value);
	var product_description = removeSpaces(document.forms["imgUpload"]["product-desc"].value);
	var product_price = removeSpaces(document.forms["imgUpload"]["product-price"].value);

	if (product_name == null || product_name == ""
			|| product_description == null || product_description == ""
			|| product_price == null || product_price == ""
			|| isNaN(product_price) == true) {

		if (product_name == null || product_name == "")
			ERROR_MESSAGE += "Product Name <br />";
		if (product_description == null || product_description == "")
			ERROR_MESSAGE += "Description <br />";
		if (product_price == null || product_price == ""
				|| isNaN(product_price) == true)
			ERROR_MESSAGE += "Price <br />";

		showDialog('Error', ERROR_MESSAGE, 'error');
		return false;
	}
	
	else
		showDialog('Success', 'New product "' + productName
				+ '" successfully saved!', 'success', 2);

}

function removeSpaces(string) {
	return string.split(' ').join('');
}