$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//Toggles the registration inputs
function registerToggle(){
	var display = document.getElementById("registerArea").style.display;
	//Hide registration only div
	if(display == "inline"){
		document.getElementById("registerArea").style.display = "none";
		document.getElementById("submitButton").value = "Sign in";
		document.getElementById("registerLink").innerHTML = "Register";
	}
	//Show registration only div
	else{
		document.getElementById("registerArea").style.display = "inline";
		document.getElementById("submitButton").value = "Register";
		document.getElementById("registerLink").innerHTML = "Sign in";
	}
}

//Validates the sign in and register form
function validateSignIn(){
	//EMAIL
	var emailIn = document.forms["signIn"]["email"].value;
	//Email must be filled in
    if(emailIn == null || emailIn == ""){
        alert("Email must be filled in: " + emailIn);
        return false;
    }
	//Email must be in "chars@chars.chars"
	else if(emailIn.match(/\S+@\S+\.\S+/) == null){
		alert("Email must be valid: " + emailIn);
        return false;
	}
	
	//PASSWORD
	var passIn1 = document.forms["signIn"]["password1"].value;
	//Password must be filled in
	if(passIn1 == null || passIn1 == ""){
		alert("Password must be filled in: " + passIn1);
		return false;
	}
	//Password must be at least 6 chars long
	else if(passIn1.length < 6){
		alert("Password must be at least 6 characters long: " + passIn1);
		return false;
	}
	
	//REPEAT PASSWORD
	var passIn2 = document.forms["signIn"]["password2"].value;
	//If password2 is filled in, it means we're registering
	if(passIn2 != null && passIn2 != ""){
		//password1 should be the same as password2
		if(passIn1 != passIn2){
			alert(passIn1 + " : " + passIn2);
			return false;
		}
		//Terms must be accepted
		else if(!document.forms["signIn"]["termsConditions"].checked){
			alert("Accept terms");
			return false;
		}
	}
}