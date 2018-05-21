<?php
$id = $_GET['id'];
$dbc = mysqli_connect('localhost' , 'root' , '' , '24577_db') or die('Error connecting.');
$query = "DELETE FROM nieuwsbrief ttorial WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die ('Error deleting.');
header("Location: beheren.php");