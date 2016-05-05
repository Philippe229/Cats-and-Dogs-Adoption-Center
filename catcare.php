<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Adoption Center</title>
		<link rel = "stylesheet" type = "text/css" href = "mainStyle.css" />
	</head>
	<body>

		<div class = "header">
			<?php include('header.php'); ?>
		</div>

		<div class = "side">
			<ul>
				<li><a href = "main.php">Home</a></li>
				<li><a href = "pets.php">Browse Available Pets</a></li>
				<li><a href = "find.php">Find a dog/cat</a></li>
				<li><a href = "dogcare.php">Dog Care</a></li>
				<li><a href = "catcare.php">Cat Care</a></li>
				<li><a href = "register.php">Register</a></li>
				<li><a href = "giveaway.php">Have a pet to give away</a></li>
				<?php
                    if (!isset($_SESSION['user']))
                        echo '<li><a href = "login.php">Login</a></li>';
                    else
                        echo '<li><a href = "logoutSuccess.php?log=out">Logout</a></li>';
                ?>
				<li><a href = "contactus.php">Contact Us</a></li>
			</ul>
		</div>

		<div class = "content">
			<h3>Cat Care</h3>
			<ul>
				<li><a href = "http://www.wikihow.com/Take-Care-of-a-Cat">wikiHow: How to Take Care of a Cat</a></li>
				<li><a href = "http://www.vet.cornell.edu/fhc/Health_Information/NewCat.cfm">Cornell Feline Health Center</a></li>
			</ul>
		</div>

		<div class = "footer">
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>