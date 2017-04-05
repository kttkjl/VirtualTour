/*Full page validation - also implement login checks server side*/
function loginvalidation() {
	if (userOrEmailValid() && passwordValid()){
		return true;
	} else {
		alert("Form input invalid");
		return false;
	}
}	

function userOrEmailValid(){
	if (userValid() || emailValid()){
		document.getElementById("UserOrEmailErrorField").innerHTML = "Login format allowed.";
		return true;
	} else {
		document.getElementById("UserOrEmailErrorField").innerHTML = 
		"Login must be username or E-mail address in the accepted format.";
		return false;
	}
}

function emailValid() {
	var domain = new RegExp(/^[A-z0-9.]{1,}@(?=(my.bcit.ca$|bcit.ca$|gmail.com$))/i); //checks email for single occurrence of @ and valid domain containing only valid characters.
	var email = document.getElementById("UserOrEmail").value;
	if (domain.test(email))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function userValid(){
	var username = document.getElementById("UserOrEmail").value,
		//a-z, 0-9 includes - _ and . 6-10 characters total, after first match, no more
		validChars = new RegExp(/^[a-z0-9]{6,10}(?!.{1,})$/),
		l = username.length;
	//document.getElementById("usernameErrorField").innerHTML = "you wrote:" + l + username;	
	if (l < 6 ) {
		return false;
		//another else if if username taken
	} else if (l > 10){
		return false;
	} else if (!validChars.test(username)){
		return false;
	} else {
		return true;
	}
}
/*Password checkbutton, true if length less than 10 and password===cpass*/
function passwordValid() {
	var pass = document.getElementById("password").value;
	if (pass.length > 10) {
		document.getElementById("passErrorField").innerHTML = "Password longer than 10";
		return false;
	} else if (pass.length <= 0){
		document.getElementById("passErrorField").innerHTML = "No password entered";
	} else {
		document.getElementById("passErrorField").innerHTML = "Password in accepted format.";
		return true;
	}
}