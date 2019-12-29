<!DOCTYPE html>
<?php
$servername = "localhost";
$dbname = "project";
$username = "nelsonsu";
$password = "Hello1!!";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO registration (userName, password, firstname, lastname,
	address1, address2, city, state, zipcode, phone, email, gender, maritalstatus, 
	dateOfBirth)
    VALUES ('', '', '', '', '',
	'', '', '', '', '', '', '',
	'', '')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection1 failed: " . $e->getMessage();
    }
?>
<html lang = "en">
	<head>
		<?php define("title", "DB_CONN"); ?>
		<title><?php echo title; ?></title>
		<meta charset = "utf-8" />
	</head>
	<body>	
	</body>
</html>