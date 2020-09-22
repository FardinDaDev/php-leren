<?php

$gegevens = array(
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201",
    "janjaap@apenboek.net" => "ik-hou-erg-graag-van-apen-als-je-dit-leest-jan-hallo-groetjes",
);

$email = isset($_POST['email']);
$wachtwoord = isset($_POST['wachtwoord']);

if(isset($_POST['email'])) {
    if($gegevens[$_POST['email']] == $_POST['wachtwoord']) {
        $_SESSION['email'] = $_POST['email'];
        echo "Welkom";
    } else if($gegevens[$_POST['email']] != $_POST['wachtwoord']) {
        echo "Geen toegang!";
    }
}

/*if (isset($_POST['knop'])) {

    foreach ($gegevens as $email => $password) {

        if (!isset($gegevens[$email]) || $gegevens[$user] != $password) {
            echo "no";
        } else {
            echo "yes";
        }
    }
}*/
