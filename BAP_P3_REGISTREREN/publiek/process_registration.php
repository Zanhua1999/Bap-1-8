<?php

require ('../private/db.php');

// Hoort de bezoeker hier uberhaupt wel te zijn?
if (!isset($_POST['submit_registration'])) {
    header('Location: register.php');
}

//Zijn alle velden ingevuld?
if (empty($_POST['username']) OR empty($_POST['email']) OR empty($_POST['password1']) OR empty($_POST['password2'])) {
    echo 'Je bent vergeten iets in te vullen.<br>';
    echo 'Klik <a href="register.php">hier</a> om terug te keren.';
    exit();
}

//Zijn beide wachtwoorden gelijk?
if($_POST['password1'] !=$_POST['password2']) {
    echo 'Je hebt twee verschillende wachtwoorden getypt.<br>';
    echo 'Klik<a href="register.php">hier</a> om terug te keren.';
    exit();
}

// Heeft de gebruiker wel een ma-adres?
$position = strpos($_POST['email'],  '@ma-web.nl');
if (!$position) {
    echo 'Sorry, je kunt je alleen registreren met een e-mailadres van het Mediacollege<br>';
    echo 'Klik<a href="register.php">hier</a> om terug te keren.';
    exit();
}

//Bestaat deze username al?
$query = "SELECT userid FROM users WHERE username = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', &var1: $username);
$username = $_POST['username'];
$result = $stmt->excute() or die ('Error querying');
$row = $stmt->fetch();
if ($row) {
    echo 'Sorry maar deze gebruikersnaam is al bezet.<br>';
    echo 'Klik <a href= "register.php">hier</a>a> om terug te keren.';
    exit();
}

//Gebruiker toevoegen aan de database
$query = "INSERT INTO users VALUES (0,?,?,?,?,0)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('ssss', &var1:$username, &..._: $mailadres,$hash,$password);
$username = $_POST['username'];
$mailadres = $_POST['email'];
$random_number = rand(0,1000000);
$hash = hash('sha512' , $random_number);
$password = hash('sha512', $_POST['password1']);
$result = $stmt->excute() or die ('Error inserting user.');

//Gebruikers mailen
$to = $_POST['email'];
$subject = 'Vertifeer je account bij THE WALL';
$message = 'Klik op de volgende link om je account te activeren: ';
$message .= '';
$headers = 'From: 24577@ma-web.nl';
mail($to,$subject,$message,$headers) or die ('Error mailing.');