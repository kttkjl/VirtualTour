var ERROR_DISPLAY = "Errors in fields: ",
	ERROR_FIELD = [];

//returns true if whole form is ready
function validateForm() {
	ERROR_FIELD = [];
	if (!userValid()){
		ERROR_FIELD.push("Username");
	}
	if (!emailValid()){
		ERROR_FIELD.push("Email");
	}
	if (!passwordValid()){
		ERROR_FIELD.push("Password");
	}
	if (!agreeValid()){
		ERROR_FIELD.push("TOS Agreement");
	}
	if(userValid() && emailValid() && passwordValid() && agreeValid()){
		return true;
	} else {
		alert(ERROR_DISPLAY + ERROR_FIELD);
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
	if (l < 6 ) {
		document.getElementById("usernameErrorField").innerHTML = "Username less than 6 chars";
		return false;
		//another else if if username taken
	} else if (l > 10){
		document.getElementById("usernameErrorField").innerHTML = "Username more than 10 chars";
		return false;
	} else if (!validChars.test(username)){
		document.getElementById("usernameErrorField").innerHTML = "Username contains illegal characters";
		return false;
	} else {
		document.getElementById("usernameErrorField").innerHTML = "Username valid";
		return true;
	}
}

//if email isn't BCIT domain or gmail
function emailValid() {
	var domain = new RegExp(/^[A-z0-9.]{1,}@(?=(my.bcit.ca$|bcit.ca$|gmail.com$))/i); //checks email for single occurrence of @ and valid domain containing only valid characters.
	var email = document.getElementById("email").value;
	if (domain.test(email))
	{
		/*if (email exists in database) {
			document.getElementById("email").value = "Email already exists"
		} else {whatever value to let form submit}*/
		document.getElementById("emailErrorField").innerHTML = "Email valid"
		return true;
	}
	else
	{
		document.getElementById("emailErrorField").innerHTML = "Email not accepted"
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
	} else if (!(pass.length > 0 && pass.length <= 10)){
		document.getElementById("cpassErrorField").innerHTML = "Please Enter a password";
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
		document.getElementById("agreeErrorField").innerHTML = '<span style="color:red">Please agree to TOS</span>';
		return false;
	} else {
		document.getElementById("agreeErrorField").innerHTML = "";
		return true;
	}
}
