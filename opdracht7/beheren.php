<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css"
    <title>Beheren</title>
</head>
<body>
<?php

// DATA INTERACTIE
$dbc = mysqli_connect('localhost' , 'root' , '' , '24577_db') or die('Error connecting.');
//QUERY BEDENKEN VOOR ZOEKEN DATA
$query = "SELECT * FROM nieuwsbrief tutorial";
//QUERY UITVOEREN
$result = mysqli_query($dbc, $query) or die ('error querying.');

echo '<table>';

// MAILEN MET WHILE-LOOP
while ($row = mysqli_fetch_array($result)) {

    $id = $row['id'];
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $mailadres = $_POST['mailadres'];

      echo '<tr>';
      echo "<td>$id</td><td>$voornaam</td><td>$tussenvoegesel</td><td>$achternaam</td><td>$mailadres</td>";
      echo '<td>';
      echo '<a href="delete.php?id=' . $id . ' ">DELETE</a>';
      echo '</td>';
    echo '<td>';
    echo '<a href="edit.php?id=' . $id . '&voornaam=' . $voornaam . '&tussenvoegesel=' . $tussenvoegsel . '&achternaam=' . $achternaam . '&,ailadres=' . $mailadres . ' ">EDIT</a>';
    echo '</td>';
      echo'</tr>';
}

echo '</tablet>'


?>


</body>
</html>