function validate(thisform) {
	var ph = thisform.phnum.value;
	var pass = thisform.password.value;
	var conpass = thisform.pswrepeat.value;

	if(conpass!=pass) {
		alert("Your 2nd Password does not match with the 1st Password");
		thisform.pswrepeat.focus();
		return false;
	}

	if(ph.length<10) {
		alert("Phone Number must have 10 digits");
		thisform.phnum.focus();
		return false;
	}

	if(isNaN(ph)) {
		alert("Invalid Phone Number");
		thisform.phnum.focus();
		return false;
	}

	return true;
}