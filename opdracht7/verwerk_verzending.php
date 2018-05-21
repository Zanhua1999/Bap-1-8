<?php

// DATA UITLEZEN
$subject = $_POST['subject'];
$message = $_POST['message'];

// DATA INTERACTIE
$dbc = mysqli_connect('localhost' , 'root' , '' , '24577_db') or die('Error connecting.');
//QUERY BEDENKEN VOOR ZOEKEN DATA
$query = "SELECT mailadres FROM nieuwsbrief tutorial";
//QUERY UITVOEREN
$result = mysqli_query($dbc, $query) or die ('error query (UITVOEREN)');

// MAILEN MET WHILE-LOOP
while ($row = mysqli_fetch_array($result)) {
echo 'Mail verzonden naar: ' . $row['Mailadres'] . '<br>';
// Variablen voor de mail
    $to = $row['mailadres'];
    $headers = 'From: 24577@ma-web.nl';
    //Mail verzenden
    mail($to,$subject,$message,$headers);

}

echo 'Klaar met verzenden.';

