<?php
session_start();

if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
</head>
<body>
    <form action="login.php" method="POST">
        Email <input type="text" name="email"><br>
        Wachtwoord <input type="password" name="password"><br>
        <input type="submit" name="knop" value="Login">
    </form>
</body>
</html>

<?php

} else {
    header("Location: dashboard.php");
}

?>