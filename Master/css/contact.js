function contact_FieldValidate(id){
	var contactFieldValue = document.getElementById(id).value;
	if(contactFieldValue == ""){
		document.getElementById(id).placeholder = "Please enter a valid input";
		return false;
	} else {
		return true;
	}
}

function contact_EmailValidate(id){
	var contactEmailSpecial1 = new RegExp(/@my.bcit.ca$/);
	var contactEmailSpecial2 = new RegExp(/@gmail.com$/);
	var contactEmailValue = document.getElementById(id).value;
	if(contactEmailValue == ""){
		document.getElementById(id).placeholder = "Please enter a valid email (BCIT email or Gmail)";
		return false;
	} else if (!(contactEmailSpecial1.test(contactEmailValue) || contactEmailSpecial2.test(contactEmailValue))){
		document.getElementById(id).placeholder = "Please enter a valid email (BCIT email or Gmail)";
		document.getElementById(id).value = "";
		return false;
	} else {
		return true;
	}
}

function contact_Replace(id){
	var contactInputSpecial = new RegExp(/[&'"\$\\]/g);
	var contactInputValue = document.getElementById(id).value;
	if(contactInputSpecial.test(contactInputValue)){
		contactInputValue=contactInput.replace(/&/g, "&amp;");
		contactInputValue=contactInput.replace(/'/g, "&#39;");
		contactInputValue=contactInput.replace(/"/g, "&quot;");
		contactInputValue=contactInput.replace(/\$/g, "&#36;");
		contactInputValue=contactInput.replace(/\\/g, "&#92;");	
	}
}

function contact_Validate(){
	var contactUsernamePass = contact_FieldValidate("username");
	var contactSubjectPass = contact_FieldValidate("subject");
	var contactCommentPass = contact_FieldValidate("contact_Input");
	var contactEmailPass = contact_EmailValidate("email");
	
	if(contactUsernamePass && contactSubjectPass && contactCommentPass && contactEmailPass){
		contact_Replace("username");
		contact_Replace("subject");
		contact_Replace("contact_Input");
	} else {
		return false;
	}
}