<?php
	session_start();
	$warning = '';
	include 'formValidation2.php';
	if ($warning !== '') {
	    echo "<script type='text/javascript'>alert('$warning');</script>";
	}
?>
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
					var radioArray2 = document.getElementsByName("gender");
					var radioArray3 = document.getElementsByName("dogbehaviour");
					var radioArray4 = document.getElementsByName("catbehaviour");
					var radioArray5 = document.getElementsByName("childrenbehaviour");
					var filled1 = false;
					var filled2 = false;
					var filled3 = false;
					var filled4 = false;
					var filled5 = false;
					var	comments = document.getElementById("comments").value;
					var firstname = document.getElementById("firstname").value;
					var familyname = document.getElementById("familyname").value;
					var email = document.getElementById("email").value;
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
					for (var i = 0; i < radioArray3.length; i++) {
						if (radioArray3[i].checked) {
							filled3 = true;
						}
					}
					for (var i = 0; i < radioArray4.length; i++) {
						if (radioArray4[i].checked) {
							filled4 = true;
						}
					}
					for (var i = 0; i < radioArray5.length; i++) {
						if (radioArray5[i].checked) {
							filled5 = true;
						}
					}
					if (filled1 == false || filled2 == false || filled3 == false || filled4 == false || filled5 == false ||
						comments.search(/^$/) != -1 || firstname.search(/^$/) != -1 || familyname.search(/^$/) != -1 ||
						email.search(/^$/) != -1) {
						alert('Please answer all questions.');
						return false;
					}
					if (email.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) == -1) {
						alert('Invalid email format.');
						return false;
					}

					return true;
				}
				//-->
			</script>
			<h3>Have a pet to give away</h3>
			<form action = "formValidation2.php" onsubmit = "return validate()" method = "post">
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
							<option>Maine Coon</option>
							<option>Exotic</option>
							<option>Labrador Retriever</option>
							<option>German Shepherd</option>
							<option>Boxer</option>
							<option>Mix Breed</option>
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
						</select>	
					</p>
					<p>
						Animal Gender:
						<label><input type = "radio" name = "gender" value = "male">Male</label>
						<label><input type = "radio" name = "gender" value = "female">Female</label> 
					</p>
					<p>
						Gets along with other dogs:
						<label><input type = "radio" name = "dogbehaviour" value = "yes">Yes</label>
						<label><input type = "radio" name = "dogbehaviour" value = "no">No</label> 
					</p>
					<p>
						Gets along with other cats:
						<label><input type = "radio" name = "catbehaviour" value = "yes">Yes</label>
						<label><input type = "radio" name = "catbehaviour" value = "no">No</label> 
					</p>
					<p>
						Suitable for a family of small children:
						<label><input type = "radio" name = "childrenbehaviour" value = "yes">Yes</label>
						<label><input type = "radio" name = "childrenbehaviour" value = "no">No</label> 
					</p>
					<p>Comments:</p>
					<textarea name = "comments" rows = "3" cols = "40" id = "comments"></textarea>
					<p>
						First Name <input type = "text" name = "firstname" id = "firstname"/>
					</p>
					<p>
						Family Name <input type = "text" name = "familyname" id = "familyname" />
					</p>
					<p>
						Email <input type = "text" name = "email"  id = "email"/>
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