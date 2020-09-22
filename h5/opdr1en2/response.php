<?php

//print_r($_GET);

if($_POST["voornaam"] == "") {
    echo "Je moet een voornaam invullen!";
    echo "<a href=\"formulier.html\">Klik hier om terug te gaan</a><br>";
} else if($_POST["adres"] == "") {
    echo "Je moet een adres invullen!";
    echo "<a href=\"formulier.html\">Klik hier om terug te gaan</a><br>";
} else if($_POST["email"] == "") {
    echo "Je moet een email invullen!";
    echo "<a href=\"formulier.html\">Klik hier om terug te gaan</a><br>";
} else if($_POST["wachtwoord"] == "") {
    echo "Je moet een wachtwoord invullen!";
    echo "<a href=\"formulier.html\">Klik hier om terug te gaan</a><br>";
} else if($_POST["wachtwoord"] && $_POST["adres"] && $_POST["email"] && $_POST["wachtwoord"]) {
    echo "Gefeliciteerd, alle gegevens zijn ingevuld! Houdoe!";
}