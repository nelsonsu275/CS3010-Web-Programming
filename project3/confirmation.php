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
						Confirmation
						<?php
							foreach($_POST as $key => $value) {
								echo "<br/>$key : $value<br/>";
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