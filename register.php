<!DOCTYPE html>
<html>
	<head>
		<title>Adoption Center</title>
		<meta charset = "utf-8">
		<link rel = "stylesheet" href = "mainStyle.css" type = "text/css">
	</head>
	<body>
		<?php
			session_start();
			$warning = '';
			include 'formValidation.php';
			if ($warning !== '')
				echo "<script type='text/javascript'>alert('$warning');</script>";
		?>
		
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
		    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
			    <h3>Register</h3>
			    <br />
				<p>
					Username and password can only contain letters (upper and lowercase) and digits.<br />
					Password should be at least four characters and must contain one letter and one digit.
				</p>
				<br />
			    <label>
			    	Username: <input type = "username" name = "username" value = "" size = "30" maxlength = "30" required = "required"/>
			    </label>
			    <br />
				<br />
			    <label>
			    	Password: <input type = "password" name = "pass1" required = "required"/>
			    </label>
			    <br />
			    <br />
			    <label>
			    	Re-enter Password: <input type = "password" name = "pass2" required = "required"/>
			    </label>
			    <br />
			    <br />
			    <input type = "reset" value = "Reset Form" />
			    <input type = "submit" value = "Submit Form" />
		    </form>
		</div>
		
		<div class = "footer">
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>