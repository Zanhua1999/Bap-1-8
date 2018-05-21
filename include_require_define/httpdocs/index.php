<?php

include('../private/connectvars.php');

// MYSQLI OBJECT AANMAKEN
$mysqli = new mysqli (HOST, USER, PASS, DBNAME);

// TESTEN OP CONNECTIE FOUTEN
if($mysqli->connect_errno){
    exit('Error code:' . $mysqli->connect_errno);

}

// QUERY SCRIJVEN
$query = "INSERT INTO nieuwsbrief tutorial VALUES(0,?,?,?,?)";

// PREPAREN
$stmt = $mysqli->prepare($query);
// BINDEN
$stmt->bind_param('ssss', &var1: $voornaam, &..._:$tsv,$achternaam,$mailadres);
// INVULLEN
$voornaam = 'Ed';
tsv = '';
$achternaam = 'Kroket';
$mailadres = 'ed@kroket.nl';
// EXCUTE
$stmt->execute();