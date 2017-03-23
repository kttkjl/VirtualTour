
//returns true if whole form is ready
function validateForm() {
	if (userValid()&&emailValid()&&loginValid()&&passwordValid()&&agreeValid()){
		return true;
	} else {
		alert("form invalid");
		return false;
	}
}

//returns true if username is valid
function userValid(){
	var username = document.getElementById("username").value,
		//a-z, 0-9 includes - _ and . 6-10 characters total, after first match, no more
		validChars = new RegExp(/^[a-z0-9]{6,10}(?!.{1,})$/),
		l = username.length;
	//document.getElementById("usernameErrorField").innerHTML = "you wrote:" + l + username;	
	if (l < 6 || l > 10) {
		document.getElementById("usernameErrorField").innerHTML = "Please enter valid username";
		return false;
		//another else if if username taken
	} else if (validChars.test(username)){
		document.getElementById("usernameErrorField").innerHTML = "Username valid";
		return true;
	} else {
		document.getElementById("usernameErrorField").innerHTML = "Username invalid";
		return false;
	}
}

//if email isn't BCIT domain or gmail
function emailValid() {
	var allowedpattern = new RegExp(/^[A-z0-9.]{1,}(?=@)/i);	//before the @
	var domain1 = new RegExp(/@my.bcit.ca(?!.{1,})/);
	var domain2 = new RegExp(/@bcit.ca(?!.{1,})/);
	var domain3 = new RegExp(/@gmail.com(?!.{1,})/);
	var email = document.getElementById("email").value;
	if (allowedpattern.test(email)&&(domain1.test(email)
		||domain2.test(email)||domain3.test(email)))
	{
		/*if (email exists in database) {
			document.getElementById("email").value = "Email already exists"
		} else {whatever value to let form submit}*/
		document.getElementById("emailErrorField").innerHTML = "Email valid"
		return true;
	}
	else
	{
		document.getElementById("emailErrorField").innerHTML = "Email invalid."
		return false;
	}
}

function loginValid() {
	var loginname= document.getElementById("loginid").value,
		//a-z, A-Z, 0-9 :: 6-10 characters total, after first match, no more
		validChars = new RegExp(/^[a-zA-Z0-9]{6,10}(?!.{1,})$/),
		l = loginname.length;
	if (l < 6 || l > 10) {
		document.getElementById("loginErrorField").innerHTML = "Please enter valid loginID";
		return false;
		//another if for if loginID already exists
	} else if (validChars.test(loginname)){
		document.getElementById("loginErrorField").innerHTML = "Login name valid";
		return true;
	} else {
		document.getElementById("loginErrorField").innerHTML = "Login name invalid";
		return false;
	}			
}

//password checkbutton, true if length less than 10 and password===cpass
function passwordValid() {
	var pass = document.getElementById("password").value,
		confirmpass = document.getElementById("cpassword").value;
	if (pass.length > 10) {
		document.getElementById("cpassErrorField").innerHTML = "Password longer than 10";
		return false;
	} else if (pass === confirmpass) {
		document.getElementById("cpassErrorField").innerHTML = "Password OK.";
		return true;
	} else {
		document.getElementById("cpassErrorField").innerHTML = "Passwords do not match.";
		return false;
	}
}

function agreeValid() {
	if (!consentYes.checked){
		document.getElementById("agreeErrorField").innerHTML = "Please agree to TOS";
		return false;
	} else {
		document.getElementById("agreeErrorField").innerHTML = "";
		return true;
	}
}
