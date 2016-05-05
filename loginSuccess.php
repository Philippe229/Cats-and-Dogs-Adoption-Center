<?php
	session_start();
	
	$user = isset($_POST['user']) ? $_POST['user'] : '';

	if (isset($_POST['submit'])) {
		$file = 'loginfile.txt';
		$password = $user . ':' . $_POST['pass'];

		if (preg_match("/\b$user\b/", file_get_contents($file))){
        	if (preg_match("/\b$password\b/", file_get_contents($file))) {
        		$_SESSION['user'] = $user;
	            $page = isset($_GET['request']) ? $_GET['request'] : 'loginSuccess.php';
	            header('Location: ' . $page);
	            die();
        	}
        	else {
        		echo '<script language="javascript">alert("Password is incorrect!");</script>';
        	}
        }
	    else {
			echo '<script language="javascript">alert("Username does not exist!");</script>';
	    }
	} 
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Adoption Center</title>
		<meta charset = "utf-8">
		<link rel = "stylesheet" href = "mainStyle.css" type = "text/css">
	</head>
	<body>

		<div class = "header">
			<?php include('header.php');?>
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
			<p>Login Succesful</p>
			<?php header( "refresh:2;url=main.php" ); ?>
		</div>
		
		<div class = "footer">
			<?php include('footer.php');?>
		</div>
	</body>
</html>