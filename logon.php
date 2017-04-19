<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>

</head>
<body>
<div class="container">
    <h1>Welcome to the Netdocs Home Page</h1>
    <div class="loginBox">
        <h3>You must login to use this system.</h3>

        <form method="post" action="login.php">

            <input type="text" name="username" placeholder="username" autofocus /><br><br>
            <input type="password" name="password" placeholder="password" />  <br><br>
            <input type="submit" name="submit" value = "Take me to the system"/>
        </form>
        <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
        <div class="forgot">
            <h3>Forgotton your username or password?.</h3>

            <form method="post" action="forgot.php">


                <input type="submit" name="submit" value = "Forgotton something"/>
            </form>
            <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

        </div>
    </div>
</body>
</html>