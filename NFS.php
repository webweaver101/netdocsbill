<?php
session_start();
    print_r($_SESSION);
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    echo "You  need  to  login ";
    //header('Location: launch.php');
    exit;
}

    $_SESSION['loggedin'] = false;
    print_r($_SESSION);
    header('Location: simp.php');
    exit;
//label

?>