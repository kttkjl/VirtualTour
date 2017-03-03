function form_validate(){
	var formValue = document.getElementById("form_TextArea").value;
	var formSpecial = new RegExp(/[&'"\$\\]/g);
	if(formValue == ""){
		document.getElementById("form_TextArea").placeholder = "Please enter a comment";
		return false;
	} else if(formSpecial.test(formValue)){
			formValue=formValue.replace(/&/g, "&amp;");
			formValue=formValue.replace(/'/g, "&#39;");
			formValue=formValue.replace(/"/g, "&quot;");
			formValue=formValue.replace(/\$/g, "&#36;");
			formValue=formValue.replace(/\\/g, "&#92;");
			alert(formValue);
			return false;
	} else {
			alert("correct");
			return true;
	}
}