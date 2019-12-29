<?php
	//variable for each field input when there's errors
	$usernameErr = $passwordErr = $password2Err = $nameErr = $lastnameErr = $add1Err = $add2Err = "";
	$cityErr = $stateErr = $zipcodeErr = $phoneNoErr = $emailErr = $genderErr = $maritalstatusErr = $dobErr = "";
	
	//variable for each field input
	$username = $password = $password2 = $name = $lastname = $add1 = $add2 = $city = "";
	$state = $zipcode = $phoneNo = $email = $gender = $maritalstatus = $dob = "";
	$isValid = false;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$isValid = true;	
	
		$username = clean_input($_POST["username"]);
		if (empty($username)) {
			$usernameErr = "User Name is required";
			$isValid = false;
		} else {
			if (strlen($username) > 50 || strlen($username) < 6)
			{
				$usernameErr = "Must be 6 to 50 characters";
				$isValid = false;
			}
		}
		
		$password = clean_input($_POST["password"]);
		if (empty($password)) {
			$passwordErr = "Password is required";
			$isValid = false;
		} else {
			if (strlen($password) > 50 || strlen($password) < 8)
			{
				$passwordErr = "Must be 8 to 50 characters";
				$isValid = false;
			}
			else if (!preg_match("#[A-Z]+#", $password))
			{
				$passwordErr = "Must contain a capital letter";
				$isValid = false;
			}
			else if (!preg_match("#[a-z]+#",$password))
			{
				$passwordErr = "Must contain a lowercase letter";
				$isValid = false;
			}
			else if (!preg_match("#[0-9]+#", $password))
			{
				$passwordErr = "Must contain a digit";
				$isValid = false;
			}
			else if (!preg_match("/\W/", $password))
			{
				$passwordErr = "Must contain a special character";
				$isValid = false;
			}
		}
		
		$password2 = clean_input($_POST["password2"]);
		if (empty($password2)) {
			$password2Err = "Please confirm password";
			$isValid = false;
		} else {
			if (strlen($password2) > 50 || strlen($password2) < 8)
			{
				$password2Err = "Must be 8 to 50 characters";
				$isValid = false;
			}
			else if (!preg_match("#[A-Z]+#", $password2))
			{
				$password2Err = "Must contain a capital letter";
				$isValid = false;
			}
			else if (!preg_match("#[a-z]+#",$password2))
			{
				$password2Err = "Must contain a lowercase letter";
				$isValid = false;
			}
			else if (!preg_match("#[0-9]+#", $password2))
			{
				$password2Err = "Must contain a digit";
				$isValid = false;
			}
			else if (!preg_match("/\W/", $password2))
			{
				$password2Err = "Must contain a special character";
				$isValid = false;
			}
			else if ($password2 != $password)
			{
				$password2Err = "Passwords do not match";
				$isValid = false;
			}
		}
		
		$name = clean_input($_POST["name"]);
		if (empty($name)) {
			$nameErr = "First name is required";
			$isValid = false;
		} else {
			if (strlen($name) > 50)
			{
				$nameErr = "Max length of 50 characters";
				$isValid = false;
			}
		}
		
		$lastname = clean_input($_POST["lastname"]);
		if (empty($lastname)) {
			$lastnameErr = "Last name is required";
			$isValid = false;
		} else {
			if (strlen($lastname) > 50)
			{
				$lastnameErr = "Max length of 50 characters";
				$isValid = false;
			}
		}
		
		$add1 = clean_input($_POST["add1"]);
		if (empty($add1)) {
			$add1Err = "Address is required";
			$isValid = false;
		} else {
			if (strlen($add1) > 100)
			{
				$add1Err = "Max length of 100 characters";
				$isValid = false;
			}
		}
		
		$add2 = clean_input($_POST["add2"]);
		if (!empty($add2)) {
			if (strlen($add2) > 100)
			{
				$add1Err = "Max length of 100 characters";
				$isValid = false;
			}
		}
		
		$city = clean_input($_POST["city"]);
		if (empty($city)) {
			$cityErr = "City is required";
			$isValid = false;
		} else {
			if (strlen($city) > 50)
			{
				$cityErr = "Max length of 50 characters";
				$isValid = false;
			}
		}
		
		$state = clean_input($_POST["state"]);
		if (empty($state)) {
			$stateErr = "State is required";
			$isValid = false;
		} else {
			if (strlen($state) > 52)
			{
				$stateErr = "Max length of 52 characters";
				$isValid = false;
			}
		}
		
		$zipcode = clean_input($_POST["zipcode"]);
		if (empty($zipcode)) {
			$zipcodeErr = "Zip code is required";
			$isValid = false;
		} else {
			if (preg_match("/[a-zA-Z]/", $zipcode))
			{
				$zipcodeErr = "Must contain only digits";
				$isValid = false;
			}			
			else if (strlen($zipcode) != 10 && strlen($zipcode) != 5)
			{
				$zipcodeErr = "Must be 5 or 9 digits";
				$isValid = false;
			}
			else if (!preg_match("/^[0-9]{5}(-[0-9]{4})?$/", $zipcode))
			{
				$zipcodeErr = "Must be in xxxxx or xxxxx-xxxx format";
				$isValid = false;
			}
		}
		
		$phoneNo = clean_input($_POST["phoneNo"]);
		if (empty($phoneNo)) {
			$phoneNoErr = "Phone number is required";
			$isValid = false;
		} else {
			if (preg_match("/[a-zA-Z]/", $phoneNo))
			{
				$phoneNoErr = "Must contain only digits";
				$isValid = false;
			}	
			else if (strlen($phoneNo) != 12)
			{
				$phoneNoErr = "Must be a 10 digits";
				$isValid = false;
			}
			else if (!preg_match("/^([0-9]{3})-([0-9]{3})-([0-9]{4})/", $phoneNo))
			{
				$phoneNoErr = "Must be in xxx-xxx-xxxx format";
				$isValid = false;
			}
		}
		
		$email = clean_input($_POST["email"]);
		if (empty($email)) {
			$emailErr = "Email is required";
			$isValid = false;
		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
				$isValid = false;
			}
		}
		
		$gender = clean_input($_POST["gender"]);
		if (empty($gender)) {
			$genderErr = "Gender is required";
			$isValid = false;
		} else {
			if (strlen($gender) > 50)
			{
				$genderErr = "Max length of 50 characters";
				$isValid = false;
			}
		}
		
		$maritalstatus = clean_input($_POST["maritalstatus"]);
		if (empty($maritalstatus)) {
			$maritalstatusErr = "Marital Status is required";
			$isValid = false;
		} else {
			if (strlen($maritalstatus) > 50)
			{
				$maritalstatusErr = "Max length of 50 characters";
				$isValid = false;
			}
		}
		
		$dob = clean_input($_POST["dob"]);
		if (empty($dob)) {
			$dobErr = "Date of Birth is required";
			$isValid = false;
		} else {
			if (!preg_match("/^((0|1)\d{1})\/((0|1|2)\d{1})\/((19|20)\d{2})/", $dob))
			{
				$dobErr = "Must be proper date in 'MM/dd/yyyy' format";
				$isValid = false;
			}			
		}		
	}
	
	function clean_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>