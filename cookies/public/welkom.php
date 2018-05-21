<?php
session_start();
// CHECKEN OF DE GEBRUIKER VERDWAALD IS
if (!isset($_SESSION['userid'])) {
    if (!isset($_COOKIE['userid'])) {
    header('Location: uitlogpoort.php');
} else {
    require('coockiecheck.php');
    $_SESSION['userid'] = $_COOKIE['userid'];
    $_SESSION['hash'] = $_COOKIE['hash'];
}
}

// CHECKEN OF DE GEBRUIKER EN DE HASH EEN MATCH ZIJN IN DE DB
require ('../private/db.php');
$query = "SELECT userid FROM users WHERE userid = ? AND hash = ?";
$stmt = $mysqli->prepare($query) or die ('Error preparing.');
$stmt->bind_param('is', &var1: $userid, &...: $hash ) or die ('Eroor binding pa1rams.');
$stmt->bind_result(&var1: $userid) or die ('Error binding results.');
$userid = $_COOKIE['userid'];
$hash = $_COOKIE['hash'];
$stmt->excute() or die ('Error executing.');
$fetch_succes = $stmt->fetch();

if (!$fetch_succes) {
    header('Location: uitlogpoort.php');
}

require ('cookiecheck.php');

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
<?php
echo 'Welkom, je bent ingelogd als gebruiker' . $_SESSION['userid'] . '<br>';
?>
<p>Klik <a href="uitlogpoort.php">hier</a>om uit te loggen</p>
</body>
</html>