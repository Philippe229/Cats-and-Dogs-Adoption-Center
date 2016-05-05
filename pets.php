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
			<h3>Browse Available Pets</h3>
			<ul class = "petlist">
				<li>
					<table class = "listedpet">
						<tr>
							<td rowspan = "5"><img src = "german_shepherd.jpg" width = "150" height = "100" alt = "Picture of a German Shepherd"/></td>
							<td><b>Dog</b></td>
							<td><b>Breed: German Shepherd</b></td>
							<td rowspan = "5"><button>Interested</button></td>
						</tr>
						<tr>
							<td>Age: 9</td>
							<td>Gender: Male</td>
						</tr>
						<tr>
							<td>Gets along with other dogs</td>
							<td>Does not get along with other cats</td>
						</tr>
						<tr>
							<td>Suitable for a family of small children</td>
							<td rowspan = "2"><button onclick = "alert('Likes to play with babies. Loves going to the park.')">Comments</button></td>
						</tr>
						<tr>
							<td>
								<b>Previous Owner Information</b><br/>
								First Name: John<br/>
								Family Name: Doe<br/>
								Email: john.doe@email.com<br/>
							</td>
						</tr>
					</table>
					<span class = "copyright">Image by West Coast Pet Care Center (http://www.west-coast.com.au/wp-content/uploads/2016/02/GermanShepherd.jpg)</span>
				</li>
				<li>
					<table class = "listedpet">
						<tr>
							<td rowspan = "5"><img src = "maine_coon.jpg" width = "150" height = "100" alt ="Picture of a Maine Coon"/></td>
							<td><b>Cat</b></td>
							<td><b>Breed: Maine Coon</b></td>
							<td rowspan = "5"><button>Interested</button></td>
						</tr>
						<tr>
							<td>Age: 5</td>
							<td>Gender: Female</td>
						</tr>
						<tr>
							<td>Does not get along with other dogs</td>
							<td>Does not get along with other cats</td>
						</tr>
						<tr>
							<td>Suitable for a family of small children</td>
							<td rowspan = "2"><button onclick = "alert('Likes to climb on top of objects. Keep away from expensive decorations and furniture.')">Comments</button></td>
						</tr>
						<tr>
							<td>
								<b>Previous Owner Information</b><br/>
								First Name: Beatrice<br/>
								Family Name: Pigeon<br/>
								Email: pigeonb@email.com<br/>
							</td>
						</tr>
					</table>
					<span class = "copyright">Image by Your Cat (http://www.yourcat.co.uk/images/catimages/Breed_MaineCoon/mc1.jpg)</span>
				</li>
			</ul>
		</div>

		<div class = "footer">
			<?php include('footer.php'); ?>
		</div>
		
	</body>
</html>