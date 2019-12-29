<!DOCTYPE html>
<?php
	include 'connectionInfo.php';
?>
<html lang="en">
	<head>
		<title>Register</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
	</head>
	<body>
	
		<?php
			include 'selectUserData.php';
		?>
		<header>	
			<div class="container-fluid">			
				<h1 style="font-size:60px;">Chocolate Club</h1>		
			</div>		
		</header>
		<section>		
			<div class="container-fluid">
				<div class="menu row">
					<div class=" col-md-3 col-sm-4 col-xs-12">
						<ul class="bl">
							<li><a href="index.html">HOME</a></li>
							<li><a href="register.php">REGISTER</a></li>
							<li><a href="animations.html"><img src="pic5.png" alt="Chocolate" style="width:250px;"></a></li>
						</ul>						
					</div>
					<div class="content col-md-9 col-sm-8 col-xs-12">					
						Confirmation
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						
							<label for="uname">Username:</label>
							<input disabled id="uname" type="text" name="uname" value="<?php echo $uname; ?>"/>
							<br/><br/>
							
							<label for="password">Password:</label>
							<input disabled id="password" type="text" name="password" value="<?php echo $password; ?>"/>
							<br/><br/>					
							
							<label for="firstname">First Name:</label>
							<input disabled id="firstname" type="text" name="firstname" value="<?php echo $firstname; ?>"/>
							<br/><br/>
							
							<label for="lastname">Last Name:</label>
							<input disabled id="lastname" type="text" name="lastname" value="<?php echo $lastname; ?>"/>
							<br/><br/>
							
							<label for="add1">Address 1:</label>
							<input disabled id="add1" type="text" name="add1" value="<?php echo $add1; ?>"/>
							<br/><br/>
							
							<label for="add2">Address 2:</label>
							<input disabled id="add2" type="text" name="add2" value="<?php echo $add2; ?>"/>
							<br/><br/>
							
							<label for="city">City:</label>
							<input disabled id="city" type="text" name="city" value="<?php echo $city; ?>"/>
							<br/><br/>
							
							<label for="state">State:</label>
							<input disabled id="state" type="text" name="state" value="<?php echo $state; ?>"/>
							<br/><br/>
							
							<label for="zipcode">Zip Code:</label>
							<input disabled id="zipcode" type="text" name="zipcode" value="<?php echo $zipcode; ?>"/>
							<br/><br/>
							
							<label for="phoneNo">Phone No:</label>
							<input disabled id="phoneNo" type="text" name="phoneNo" value="<?php echo $phoneNo; ?>"/>
							<br/><br/>
							
							<label for="email">Email:</label>
							<input disabled id="email" type="text" name="email" value="<?php echo $email; ?>"/>
							<br/><br/>
							
							<label for="gender">Gender:</label>
							<input disabled id="gender" type="text" name="gender" value="<?php echo $gender; ?>"/>
							<br/><br/>
							
							<label for="maritalstatus">Marital Status:</label>
							<input disabled id="maritalstatus" type="text" name="maritalstatus" value="<?php echo $maritalstatus; ?>"/>
							<br/><br/>
							
							<label for="dob">Date of Birth:</label>
							<input disabled id="dob" type="text" name="dob" value="<?php echo $dob; ?>"/>
							<br/><br/>
							
						</form>
						
						<button>SUBMIT BUTTON</button>
			
						<!--<?php
							foreach($_POST as $key => $value) {
								echo "<br/>$key : $value<br/>";
							}
						?> -->
					</div>
				</div>
			</div>	
		</section>
		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<ul class="bl2">
							<li><a href="https://www.hersheys.com/en_us/home.html">Hershey's</a></li>
							<li><a href="https://www.nestle.com/brands/chocolateconfectionery">Nestlé</a></li>
							<li><a href="https://www.mars.com/global/brands/confectionery">Mars</a></li>
						</ul>						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">					
						<ul class="bl2">
							<li><a href="https://www.cadbury.co.uk/products">Cadbury</a></li>
							<li><a href="https://www.ferrerorocher.com/en/us">Ferrero Rocher</a></li>
							<li><a href="https://www.lindtusa.com/">Lindt</a></li>
						</ul class="bl2">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">					
						<ul class="bl2">
							<li><a href="https://en.wikipedia.org/wiki/List_of_chocolate_bar_brands">List of Chocolate Brands</a></li>
							<li><a href="https://www.amazon.com/Candy-Chocolate/b?ie=UTF8&node=16322461">Buy Chocolates on Amazon</a></li>			
						</ul>
					</div>
				</div>
			</div>	
		</footer>
	</body>
</html>