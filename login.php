<?php
//session_start(); // Starting Session
include("/home/site/private/connection.php");

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['loggedin'] = false;


    $sql="SELECT username FROM users WHERE username='$username' and password='$password'";
    $result=mysqli_query($link,$sql);
    if(mysqli_num_rows($result) == 1)

    {
        $_SESSION['loggedin'] = true;
        $_SESSION['username']=$username;

        echo("Current username is ".$_SESSION['username']);

        header("location: NFS.php"); // Redirecting To another Page
    }else
    {
        echo "Incorrect user or password.";
    }
}

?>



