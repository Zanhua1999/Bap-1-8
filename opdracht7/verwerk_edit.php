<?php
$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$mailadres = $_GET['mailadres'];

$id = $_GET['id'];
$dbc = mysqli_connect('localhost' , 'root' , '' , '24577_db') or die('Error connecting.');
$query = "UPDATE nieuwsbrief_tutorial ";
$query .="SET voornaam = '$voornaam', tussenvoegesel = '$tussenvoegsel', achternaam = 'achternaam', mailadres = '$mailadres' ";
$query .= "WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die ('Error updating.');
header("Location: beheren.php");