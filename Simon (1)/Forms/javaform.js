function form_validate(){
	var formValue = document.getElementById("form_TextArea").value;
	if(formValue == ""){
		document.getElementById("form_TextArea").placeholder = "Please enter a comment";
		return false;
	} else {
		formValue.replace("\"", "&#39;");
		formValue.replace("\"", "&quot;");
		formValue.replace("$", "&#36;");
		formValue.replace("&", "&amp;");
		formValue.replace("\\", "&#92;");
		formValue.replace("/d/g", "f");
		alert(formValue);
		return false;
	}
}