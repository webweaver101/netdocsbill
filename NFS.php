<?php
session_start();
    //print_r($_SESSION);

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo "You  need  to  login ";
    header('Location: index.html');
    exit;
}

$_SESSION['loggedin'] = false;
    //print_r($_SESSION);
//define('URL', '/home/site/private/');
//echo (URL);
//header('Location: '.URL.'simp.php');
header('Location: simp.php');



?>


