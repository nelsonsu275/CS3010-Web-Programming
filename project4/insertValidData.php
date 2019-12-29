<?php
	if ($isValid) {
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql = $conn->prepare("INSERT INTO registration (userName, password, firstname, lastname,
			address1, address2, city, state, zipcode, phone, email, gender, maritalstatus, 
			dateOfBirth)
			VALUES (:name, :password, :firstname, :lastname, :address1,
			:address2, :city, :state, :zipcode, :phone, :email, :gender,
			:maritalstatus, :dateOfBirth)");
			$sql->bindParam(':name', $uname);
			$sql->bindParam(':password', $password);
			$sql->bindParam(':firstname', $firstname);
			$sql->bindParam(':lastname', $lastname);
			$sql->bindParam(':address1', $add1);
			$sql->bindParam(':address2', $add2);
			$sql->bindParam(':city', $city);
			$sql->bindParam(':state', $state);
			$sql->bindParam(':zipcode', $zipcode);
			$sql->bindParam(':phone', $phoneNo);
			$sql->bindParam(':email', $email);
			$sql->bindParam(':gender', $gender);
			$sql->bindParam(':maritalstatus', $maritalstatus);
			$sql->bindParam(':dateOfBirth', $dob);
			
			$sql->execute();
			
			$last_id = $conn->lastInsertId();
			$_SESSION["last_id"] = "$last_id";
			
			header("Location: confirmation.php");
		}
		catch(PDOException $e) {
			echo "Connection3 failed: " . $e->getMessage();
		}
		$conn = null;
	}
?>