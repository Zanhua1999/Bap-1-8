<?php

//POST-ARRY uitlezen
  $voornaam = $_POST['voornaam'];
  $tussenvoegsel = $_POST['tussenvoegsel'];
  $achternaam = $_POST['achternaam'];
  $mailadres = $_POST['mailadres'];

//Data in database stoppen
//1. verbinding maken met de database
$dbc = mysqli_connect('localhost' , 'root' , '' , '24577_db') or die('Error connecting.');

//2. opdracht (QUERY)schrijven voor de database
$query = "INSERT INTO opdracht7 VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$mailadres')";
//3. QUERY uitvoeren
$result = mysqli_query($dbc,$query) or die('Error querying.');
//4. Verbinding verbreken
mysqli_close($dbc);



//Bevestigen dat data in database staat
if ($result) {
    echo 'De volgende gegevens zijn toegevoegd aan de database:<br> ';
    echo $voornaam . '<br>';
    echo $tussenvoegsel . '<br>';
    echo $achternaam . '<br>';
    echo $mailadres . '<br>';
} else {
    echo 'Sorry, er is iets misgegaan. Probeer het opnieuw.';
}