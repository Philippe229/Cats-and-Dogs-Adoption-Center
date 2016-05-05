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
			<script type = "text/javascript">
				<!--
				function validate() {
					var radioArray1 = document.getElementsByName("animal");
					var radioArray2 = document.getElementsByName("behaviour");
					var filled1 = false;
					var filled2 = false;
					for (var i = 0; i < radioArray1.length; i++) {
						if (radioArray1[i].checked) {
							filled1 = true;
						}
					}
					for (var i = 0; i < radioArray2.length; i++) {
						if (radioArray2[i].checked) {
							filled2 = true;
						}
					}
					if (filled1 == true && filled2 == true) {
						return true;
					}
					else {
						alert('Please answer all questions.');
						return false;
					}
				}
				//-->
			</script>
			<h3>Find a dog/cat</h3>
			<form action = "#" onsubmit = "return validate()">
				<fieldset>
					<legend>Questions</legend>
					<p>
						Cat or Dog:
						<label><input type = "radio" name = "animal" value = "cat">Cat</label>
						<label><input type = "radio" name = "animal" value = "dog">Dog</label>
					</p>
					<p>Breed of cat or dog:
						<select name = "breed">
							<option selected = "selected">Persian</option>
							<option>Maine Coone</option>
							<option>Exotic</option>
							<option>Labrador Retriever</option>
							<option>German Shepherd</option>
							<option>Boxer</option>
							<option>Doesn't matter</option>
						</select>	
					</p>
					<p>Preferred age of animal:
						<select name = "age">
							<option selected = "selected">0-1</option>
							<option>2-5</option>
							<option>6-8</option>
							<option>9-11</option>
							<option>12-14</option>
							<option>15+</option>
							<option>Doesn't matter</option>
						</select>	
					</p>
					<p>
						Needs to get along with other dogs, other cats, small children:
						<label><input type = "radio" name = "behaviour" value = "yes">Yes</label>
						<label><input type = "radio" name = "behaviour" value = "no">No</label> 
					</p>
				</fieldset>
				<br />
				<p>
					<input id = "submit" type = "submit" name = "submit" value = "Submit" />
					<input id = "reset" type = "reset" name = "reset" value = "Reset" />
				</p>
			</form>
		</div>

		<div class = "footer">
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>