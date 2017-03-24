/*Full page validation - also implement login checks server side*/
function loginvalidation() {
	if (userValid() && passwordValid()){
		return true;
	} else {
		alert("Form input invalid");
		return false;
	}
}	
/*Returns true if username is valid*/
function userValid(){
	var username = document.getElementById("username").value;
		//a-z, 0-9 includes - _ and . 6-10 characters total, after first match, no more
	var validChars = new RegExp(/[a-z0-9]{6,10}(?!.{1,})/);
	var name = username.length;
	//document.getElementById("usernameErrorField").innerHTML = "you wrote:" + l + username;	
	if (name < 6 || name > 10) {
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