<?php
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        return;
    }

    $warning = "";

    $username = $_POST['username'];

    if ($_POST['pass1'] !== $_POST['pass2']) {
        $warning .= 'Both passwords do not match\n';
    }

    if (strlen($_POST['pass1']) < 4) {
        $warning .= 'Password must be at least 4 characters\n';
    }

    if (!preg_match('/^[A-Za-z0-9]+$/', $username)) {
        $warning .= 'Username must only contain letters and digits\n';
    }
    if (!preg_match('/^[A-Za-z0-9]+$/', $_POST['pass1'])) {
        $warning .= 'Password must only contain letters and digits\n';
    }
    if (!preg_match('/[0-9]+/', $_POST['pass1'])) {
        $warning .= 'Password must at least contain 1 digit\n';
    }
    if (!preg_match('/[A-Za-z]+/', $_POST['pass1'])) {
        $warning .= 'Password must at least contain 1 letter\n';
    }
    if (preg_match("/\b$username\b/", file_get_contents('loginfile.txt'))) {
        $warning .= 'That username already exists\n';
    }

    if ($warning !== "") {
        return;
    } 
    else {
    	$file = 'loginfile.txt';

        if (filesize($file) == 0) {
    	   $handle = fopen($file, 'w');
    	   fwrite($handle, $username . ':' . $_POST['pass1'] . PHP_EOL);
    	   fclose($handle);
    	} 
        else {
    	   $handle = fopen($file, 'a');
    	   fwrite($handle, $username . ':' . $_POST['pass1'] . PHP_EOL);
    	   fclose($handle);
    	}

    	header('Location: createAccountSuccess.php');
        die();
    }
?>
