<?php
	if (session_status() == PHP_SESSION_NONE) {
  		session_start();
	}
	if (isset($_GET['log'])) {
	    unset($_SESSION['$user']);
	    session_destroy();
	}
?>
<h1><a href = "main.php"><img src = "logo.png" alt = "Naughty Dog Logo" /></a>Cats and Dogs Adoption Center</h1>
<p id = "logosource">Image by RealGamerNewz (http://realgamernewz.com/wp-content/uploads/2013/06/The-Last-Of-Us-Naughty-Dog.png)</p>
<p id = "time">
	<script type = "text/javascript">
		<!--
			function displayTime() {
				document.getElementById("time").innerHTML = Date();
				setTimeout(displayTime, 1000);
			}
			displayTime();
		//-->
	</script>
</p>