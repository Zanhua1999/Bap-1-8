<?php
session_start();
if (!isset($_COOKIE['userid']) OR isset($_SESSION['userid'])) {
    header('Location: welkom.php');
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo COOKIES en SESSIONS</title>
</head>
<body>
<h1>Demo COOKIES en SESSIONS</h1>
<p>Log hier in...</p>

<form methode="post" action="inlogpoort.php">
    <label>Username:<input name="username" /></label>
    <label>Password:<input type="password" name="password" /></label>
    <input type="submit" name="submit_login" value="GO!"/>
</form>

</body>
</html>