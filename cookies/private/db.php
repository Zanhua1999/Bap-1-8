<?php
$mysqli = new mysqli('localhost', 'root', 'root', '24577_db') or die ('Error connecting.');

if ($mysqli->errno) {
    echo 'Error number:' . $mysqli->errno . '<br>';
}