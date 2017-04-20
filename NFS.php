<?php
session_start();
    print_r($_SESSION);
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo "You  need  to  login ";
    header('Location: index.html');
    exit;
}

$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
$_SESSION['loggedin'] = false;
    //print_r($_SESSION);
//define('URL', '/home/site/private/');
//echo (URL);
//header('Location: '.URL.'simp.php');
//header('Location: simp.php');



?>


