<?php
    if (!isset($_SESSION['user']))
         header('Location: login.php');

    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        return;
    }

    $file = 'availablepetinformationfile.txt';
    
    if (filesize($file) == 0){
    	$handle = fopen($file, 'w');
    	fwrite($handle, '1:' . $_SESSION['user'] . ':' . $_REQUEST['animal'] . ':' .
            $_REQUEST['breed'] . ':' . $_REQUEST['age'] . ':' .
            $_REQUEST['gender'] . ':' . $_REQUEST['dogbehaviour'] . ':' . $_REQUEST['catbehaviour'] . ':' .
            $_REQUEST['childrenbehaviour'] . ':' . $_REQUEST['comments'] . ':' .
            $_REQUEST['firstname'] . ':' . $_REQUEST['familyname'] . ':'. $_REQUEST['email'] . PHP_EOL);
    	fclose($handle);
    }
    else{
    	$handle = fopen($file, 'a');
    	fwrite($handle, (getLines($file) + 1) . ':' . $_SESSION['user'] . ':' . $_REQUEST['animal'] . ':' .
            $_REQUEST['breed'] . ':' . $_REQUEST['age'] . ':' .
            $_REQUEST['gender'] . ':' . $_REQUEST['dogbehaviour'] . ':' . $_REQUEST['catbehaviour'] . ':' .
            $_REQUEST['childrenbehaviour'] . ':' . $_REQUEST['comments'] . ':' .
            $_REQUEST['firstname'] . ':' . $_REQUEST['familyname'] . ':'. $_REQUEST['email'] . PHP_EOL);
    	fclose($handle);
    }
    header('Location: giveaway.php');
    die();

    function getLines($file)
    {
        $f = fopen($file, 'rb');
        $lines = 0;

        while (!feof($f)) {
            $lines += substr_count(fread($f, 8192), "\n");
        }

        fclose($f);

        return $lines;
    }
?>