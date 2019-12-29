
/*function checkEmail(ele) {		
	console.debug("Checking email!");
	
	var emailEle = 
		document.getElementById("email").value;		
		
	if (emailEle) {
		var emailValue = emailEle.value;
		console.debug("value: " + emailValue);

		console.debug(
			emailValue.search(
				/\w+@\w+\.\w+/
				)
			);

		var index = emailValue.search(
				/\w+@\w+\.\w+/
		);
			
		if (index > -1) {
			var pEle = document.getElementById("msg");
			if (pEle) { 
				pEle.innerHTML = "Valid email!";
			}
		} else {
			var pEle = document.getElementById("msg");
			if (pEle) { 
				pEle.innerHTML = "Invalid email!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
			}
		}		
	}
} */
function checkEmail(ele) {
	console.debug("Checking email!");
	
	var emailEle = 
		document.getElementById("email");
		
	if (emailEle) {
		var emailValue = emailEle.value;
		console.debug("value: " + emailValue);
		
		console.debug(
			emailValue.search(
				/\w+@\w+\.\w+/
			)
		);
		
		var index = emailValue.search(
				/\w+@\w+\.\w+/
			);
			
		if (index > -1) {
			var pEle = document.getElementById("msg");
			if (pEle) { 
				pEle.innerHTML = "Valid email!";
				pEle.classList.add("valid");
			}
		} else {
			var pEle = document.getElementById("msg");
			if (pEle) { 
				pEle.innerHTML = "Invalid email!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
			}
		}
		
		/*if (index > -1) {
			var newValue = 
				emailValue.substring(index);
			
			var pEle = document.getElementById("msg");
			if (pEle) {
				pEle.innerHTML = "Did you mean: <a " +
				"href='javascript:void(0);' " +
				"onclick='replaceEmail(\"" + newValue + 
				"\");'>" +
				newValue + 
				"</a> ?";
			}
		}*/
	}
}


function replaceEmail(valueToReplace) {
	console.debug("replacing email: " 
		+ valueToReplace);
	var emailEle = 
		document.getElementById("email");
		
	if (emailEle) {
		emailEle.value = valueToReplace;
	}	
}

function valid(ele) {
	var name = document.getElementById('uname').value;
	var password = document.getElementById('password').value;
	var password2 = document.getElementById('password2').value;
	var fname = document.getElementById('firstname').value;
	var lname = document.getElementById('lastname').value;
	var address1 = document.getElementById('add1').value;
	var city = document.getElementById('city').value;
	var state = document.getElementById('state').value;
	var zip = document.getElementById('zipcode').value;
	var phone = document.getElementById('phoneNo').value;
	var gender = document.getElementById('gender').value;
	var marital = document.getElementById('maritalstatus').value;
	var dob = document.getElementById('dob').value;	
	
	if ((name == "") || (name.length < 6) || (name.length > 50))
	{	
		document.getElementById("nameMsg").innerHTML = "Invalid";
		nameMsg.classList.remove("valid");
		nameMsg.classList.add("invalid");
	} 
	else
	{
		document.getElementById("nameMsg").innerHTML = "Valid!";
	}
	var passwordreq = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
	if ((password == "") || (password < 8) || (!passwordreq.test(password)))
	{	
		document.getElementById("passwordMsg").innerHTML = "Invalid";
		passwordMsg.classList.remove("valid");
		passwordMsg.classList.add("invalid");
	} 
	else
	{
		document.getElementById("passwordMsg").innerHTML = "Valid!";
	}
	if ((password2 == "") || (password2 != password))
	{	
		document.getElementById("passwordMsg2").innerHTML = "Invalid";
		passwordMsg2.classList.remove("valid");
		passwordMsg2.classList.add("invalid");
	}
	else
	{
		document.getElementById("passwordMsg2").innerHTML = "Valid!";
	}	
	if ((fname == "") || (fname.length > 50))
	{	
		document.getElementById("fnameMsg").innerHTML = "Invalid";
		fnameMsg.classList.remove("valid");
		fnameMsg.classList.add("invalid");
	} 
	else
	{
		document.getElementById("fnameMsg").innerHTML = "Valid!";
	}
	if ((lname == "") || (lname.length > 50))
	{	
		document.getElementById("lnameMsg").innerHTML = "Invalid";
		lnameMsg.classList.remove("valid");
		lnameMsg.classList.add("invalid");
	} 
	else
	{
		document.getElementById("lnameMsg").innerHTML = "Valid!";
	}
	if ((address1 == "") || (address1.length > 100))
	{	
		document.getElementById("address1Msg").innerHTML = "Invalid";
		address1Msg.classList.remove("valid");
		address1Msg.classList.add("invalid");
	}
	else
	{
		document.getElementById("address1Msg").innerHTML = "Valid!";
	}	
	if ((city == "") || (city.length > 50))
	{	
		document.getElementById("cityMsg").innerHTML = "Invalid";
		cityMsg.classList.remove("valid");
		cityMsg.classList.add("invalid");
	}
	else
	{
		document.getElementById("cityMsg").innerHTML = "Valid!";
	}	
	if ((state == "") || (state.length > 52))
	{	
		document.getElementById("stateMsg").innerHTML = "Invalid";
		stateMsg.classList.remove("valid");
		stateMsg.classList.add("invalid");
	} 
	else
	{
		document.getElementById("stateMsg").innerHTML = "Valid!";
	}
	if ((zip == "") || (zip < 5) || (isNaN(zip)))
	{		
		document.getElementById("zipMsg").innerHTML = "Invalid";
		zipMsg.classList.remove("valid");
		zipMsg.classList.add("invalid");
	}
	else
	{
		document.getElementById("zipMsg").innerHTML = "Valid!";
	}
	if (((phone) == "") || (isNaN(phone)))
	{	
		document.getElementById("phoneMsg").innerHTML = "Invalid";
		phoneMsg.classList.remove("valid");
		phoneMsg.classList.add("invalid");
	}
	else
	{
		document.getElementById("phoneMsg").innerHTML = "Valid!";
	}
	if (gender == "")
	{	
		document.getElementById("genderMsg").innerHTML = "Invalid";
		genderMsg.classList.remove("valid");
		genderMsg.classList.add("invalid");
	} 
	else
	{
		document.getElementById("genderMsg").innerHTML = "Valid!";
	}
	if (marital == "")
	{	
		document.getElementById("maritalMsg").innerHTML = "Invalid";
		maritalMsg.classList.remove("valid");
		maritalMsg.classList.add("invalid");
	}
	else
	{
		document.getElementById("maritalMsg").innerHTML = "Valid!";
	}	
	if (dob == "")
	{	
		document.getElementById("dobMsg").innerHTML = "Invalid";
		dobMsg.classList.remove("valid");
		dobMsg.classList.add("invalid");
	}
	else
	{
		document.getElementById("dobMsg").innerHTML = "Valid!";
	}	
}

function formatPhone(phone) {
  var temp = ('' + phone).replace(/\D/g, '')
  var compare = temp.compare(/^(\d{3})(\d{3})(\d{4})$/)
  if (compare) {
    return '(' + compare[1] + ') ' + compare[2] + '-' + compare[3]
  }
  return null
}

function formatZip(zip) {
  var temp = ('' + phone).replace(/\D/g, '')
  var compare1 = temp.compare1(/^(\d{5})(\d{4})$/)
  var compare2 = temp.compare2(/^(\d{5})$/)
  if (compare1) {
    return compare1[1] + '-' + compare1[2]
  }
  else if (compare2) {
	return compare2[1]
  }
  return null
}