<?php
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
