/*Full page validation - also implement login checks server side*/
function loginvalidation() {
	if (emailValid() && passwordValid()){
		return true;
	} else {
		alert("Form input invalid");
		return false;
	}
}	
/*Returns true if email is valid*/
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
		document.getElementById("emailErrorField").innerHTML = "Email invalid."
		return false;
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
		document.getElementById("passErrorField").innerHTML = "Password OK.";
		return true;
	}
}