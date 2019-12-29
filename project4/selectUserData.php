<?php
	try {
		$last_id = $_SESSION["last_id"];
		//echo "<br/>ID: $last_id<br/>";
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT userName, password, firstname, lastname,
		address1, address2, city, state, zipcode, phone, email, gender, maritalstatus, dateOfBirth ".
		" FROM registration WHERE id = :last_id");
		$stmt->bindParam(':last_id', $last_id);
		$stmt->execute();

		// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		//var_dump($stmt->fetchAll()[0]);
		$assocArray = $stmt->fetchAll()[0];
		$uname = $assocArray["userName"];
		$password = $assocArray["password"];
		$firstname = $assocArray["firstname"];
		$lastname = $assocArray["lastname"];
		$add1 = $assocArray["address1"];
		$add2 = $assocArray["address2"];
		$city = $assocArray["city"];
		$state = $assocArray["state"];
		$zipcode = $assocArray["zipcode"];
		$phoneNo = $assocArray["phone"];
		$email = $assocArray["email"];
		$gender = $assocArray["gender"];
		$maritalstatus = $assocArray["maritalstatus"];
		$dob = $assocArray["dateOfBirth"];
	}
	catch(PDOException $e) {
		echo "Connection2 failed: " . $e->getMessage();
	}
	$conn = null;
?>