<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data</title>
</head>
<body>
<?php
$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$mailadres = $_GET['mailadres'];
?>

<form methode="get" action="verwerk_edit.php">
    <input type="hidden" name="id" value"<?php echo $id; id ?>";
    <label>
        <input type="text" name="voornaam" value="<?php echo $voornaam; ?>"
    </label>
    <br>
    <label>
        <input type="text" name="tussenvoegesel" value="<?php echo $tussenvoegesel; ?>"
    </label>
    <br>
    <label>
        <input type="text" name="achternaam" value="<?php echo $achternaam; ?>"
    </label>
    <br>
    <label>
        <input type="text" name="mailadres" value="<?php echo $mailadres; ?>"
    </label>
    <br>
    <input type="submit" name="submit" value="GO!"/>


</form>
</body>
</html>