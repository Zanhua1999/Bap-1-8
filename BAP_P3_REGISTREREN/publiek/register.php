<?php
include ('htmlhead.php');
?>

<h1>Registeren</h1>

<form method="post" action="process_registration.php">
    <label>Gebruiksnaam:<br><input name="username" /></label><br>
    <label>E-mail:<br><input type="email" name="email" /></label><br>
    <label>Wachtwoord:<br><input type="password" name="password1" /></label><br>
    <label>Herhaal wachtwoord:<br><input type="password" name="password2" /></label><br>
    <label><input type="submit" name="submit_registraton" value="REGISTREER" /></label><br>
</form>

<?php
include ("htmlfoot.php");
?>
