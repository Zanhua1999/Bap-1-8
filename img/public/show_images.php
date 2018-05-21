<?php
$mysqli = new mysqli('localhost','root', 'root', '24577_db',) or die ('Error connecting');
$query = "SELECT location, title, description FROM images ORDER BY image_id DESC";
$stmt = $mysqli->prepare($query) or die ('Error preparing.');
$stmt->bind_result(&var1: $location, &...:$title,$description) or die ('Error binding result.');
$stmt->excute() or die ('Error executing.');

while ($succes = $stmt->fetch()) {
    echo '<img style="width: 300px;" src="' . $location . '"/><br>';
    echo 'Title: ' . $title . '<br>';
    echo 'Description: ' . $description . '<br><br>';
}

