function validateForm()
{
	
	var errorMessage = "";


	var ship3 = -1;

	var ele3 = document.getElementsByName("hat3");
	for(var i=0;i<ele3.length;i++){
		if(ele3[i].checked == true){
			ship3 = i;
		}
   	}
	
	var user = document.getElementById("user").value;
	if(!ValidateEmail(user)){
		errorMessage = errorMessage + "Email address given is not valid. \n";
	}
	if(document.getElementById("quantity1").value < 0 || document.getElementById("quantity2").value < 0 || document.getElementById("quantity3").value < 0){
		errorMessage = errorMessage + "Quantities cannot be less than zero. \n";
	}
	if(document.getElementById("quantity1").value == '' || document.getElementById("quantity2").value == '' || document.getElementById("quantity3").value == ''){
		errorMessage = errorMessage + "Quantities cannot be empty. \n";
	}
	if(document.getElementById("password").value == ''){
		errorMessage = errorMessage + "Password field cannot be blank. \n";
	}
	if(ship3 == -1){
		errorMessage = errorMessage + "Please select a shipping option. \n";
	}
	
	if(errorMessage != ""){
		alert(errorMessage);
		return false;
	}
	return true;
	
}

function resetForm()
{
	document.getElementById("user").value = "";
	document.getElementById("password").value = "";
	document.getElementById("quantity1").value = "";
	document.getElementById("quantity2").value = "";
	document.getElementById("quantity3").value = "";
	
   	
	var ele = document.getElementsByName("hat3");
	for(var i=0;i<ele.length;i++){
	     ele[i].checked = false;
   	}


	
}
function ValidateEmail(mail) 
{
	return /\S+@\S+\.\S+/.test(mail);
}
