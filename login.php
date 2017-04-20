<?php
session_start(); // Starting Session
include("/home/site/private/connection.php");

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
    $username=$_POST['username'];
    $username=addslashes()slashes( $username );
    $password=$_POST['password'];
    $password=addslashes( $password );
    $_SESSION['loggedin'] = false;


    $sql="SELECT username FROM users WHERE username='$username' and password='$password'";
    $result=mysqli_query($link,$sql);
    if(mysqli_num_rows($result) == 1)

    {
        $_SESSION['loggedin'] = true;
        $_SESSION['username']=$username;
        print_r($_SESSION);


        echo("Current username is ".$_SESSION['username']);

        header("location: NFS.php"); // Redirecting To another Page
        exit;
    }else
    {
        echo "Incorrect user or password.";
    }
}

?>



