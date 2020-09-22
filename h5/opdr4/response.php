<?php

$gegevens = array(
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201",
    "janjaap@apenboek.net" => "ik-hou-erg-graag-van-apen-als-je-dit-leest-jan-hallo-groetjes",
);

if (isset($_POST['knop'])) {
    $ename = $_POST['email'];
    $pass = $_POST['wachtwoord'];
    foreach ($gegevens as $email => $password) {
        if ($email == $ename && $password == $pass) {
            $msg = "<p>Welkom!</p>";

        break;
        } else {
            $msg = "<p>Verkeerde gebruikersnaam of wachtwoord</p>";
        }
    }
    echo $msg;
}

