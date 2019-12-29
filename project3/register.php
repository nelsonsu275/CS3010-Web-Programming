<!DOCTYPE html>
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
						<?php
							include 'inputValidation.php';
						?>
						<h2><b>Registration Form</b></h2>
						<p><span class="error">* required field.</span></p>
						<form method="POST" novalidate
							action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">										
							
						    <label for="username">User Name:</label>
							<input id="username" type="text" name="username"
								value="<?php echo $username; ?>"/>
							<span class="error">* <?php echo $usernameErr;?></span>
							<br/><br/>
							
							<label for="password">Password:</label>
							<input id="password" type="password" name="password"
								value="<?php echo $password; ?>"/>
							<span class="error">* <?php echo $passwordErr;?></span>
							<br/><br/>
							
							<label for="password2">Confirm Password:</label>
							<input id="password2" type="password" name="password2"
								value="<?php echo $password2; ?>"/>
							<span class="error">* <?php echo $password2Err;?></span>
							<br/><br/>
							
							<label for="name">First Name:</label>
							<input id="name" type="text" name="name"
								value="<?php echo $name; ?>"/>
							<span class="error">* <?php echo $nameErr;?></span>
							<br/><br/>
							
							<label for="lastname">Last Name:</label>
							<input id="lastname" type="text" name="lastname"
								value="<?php echo $lastname; ?>"/>
							<span class="error">* <?php echo $lastnameErr;?></span>
							<br/><br/>
							
							<label for="add1">Address Line 1:</label>
							<input id="add1" type="text" name="add1"
								value="<?php echo $add1; ?>"/>
							<span class="error">* <?php echo $add1Err;?></span>
							<br/><br/>
							
							<label for="add2">Address Line 2:</label>
							<input id="add2" type="text" name="add2"
								value="<?php echo $add2; ?>"/>
							<span><?php echo $add2Err;?></span>
							<br/><br/>
							
							<label for="city">City:</label>
							<input id="city" type="text" name="city"
								value="<?php echo $city; ?>"/>
							<span class="error">* <?php echo $cityErr;?></span>
							<br/><br/>
							
							<label for="state">State:</label>
							<input id="state" type="text" name="state"
								value="<?php echo $state; ?>"/>
							<span class="error">* <?php echo $stateErr;?></span>
							<br/><br/>
							
							<label for="zipcode">Zip Code:</label>
							<input id="zipcode" type="text" name="zipcode" placeholder="xxxxx or xxxxx-xxxx"
								value="<?php echo $zipcode; ?>"/>
							<span class="error">* <?php echo $zipcodeErr;?></span>
							<br/><br/>
							
							<label for="phoneNo">Phone No:</label>
							<input id="phoneNo" type="text" name="phoneNo" placeholder="xxx-xxx-xxxx"
								value="<?php echo $phoneNo; ?>"/>
							<span class="error">* <?php echo $phoneNoErr;?></span>
							<br/><br/>
							
							<label for="email">E-mail:</label>
							<input id="email" type="text" name="email" placeholder="ex. hello@mail.com" 
								value="<?php echo $email; ?>"/>
							<span class="error">* <?php echo $emailErr;?></span>
							<br/><br/>
							
							<label for="gender">Gender:</label>
							<input id="gender" type="text" name="gender"
								value="<?php echo $gender; ?>"/>
							<span class="error">* <?php echo $genderErr;?></span>
							<br/><br/>
							
							<label for="maritalstatus">Marital Status:</label>
							<input id="maritalstatus" type="text" name="maritalstatus"
								value="<?php echo $maritalstatus; ?>"/>
							<span class="error">* <?php echo $maritalstatusErr;?></span>
							<br/><br/> 
							
							
							<label for="dob">Date of Birth:</label>
							<input id="dob" type="text" name="dob" placeholder="MM/dd/yyyy"
								value="<?php echo $dob; ?>"/>
							<span class="error">* <?php echo $dobErr;?></span>
							<br/><br/>
					
							<button>SUBMIT BUTTON</button>  
							

						</form>
						
						<?php
						if ($isValid) {
							?>
							<form id="hiddenForm" name="hiddenForm" 
								method="POST" action="confirmation.php">
								<?php
									foreach($_POST as $key => $value) {
										?>
										<input name="<?php echo $key;?>" 
											value="<?php echo $value;?>" 
											type="hidden"/>
										<?php
									}
							?>
							</form>
							<script>
								document.createElement('form').submit.call(document.getElementById('hiddenForm'));
							</script>
						<?php
						}
						?>
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