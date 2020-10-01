<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=bakkerij', "root", "");

    $dbh = null;
} catch (PDOException $e) {
    echo "Error! " . $e->getMessage();
    die();
}

require("Brood.php");
$naam = isset($_POST['naam']) ? $_POST['naam'] : "";
$soort = isset($_POST['soort']) ? $_POST['soort'] : "";
$vorm = isset($_POST['vorm']) ? $_POST['vorm'] : "";
$gewicht = isset($_POST['gewicht']) ? $_POST['gewicht'] : "";

$broodoverzicht = new BroodOverzicht();

$broodoverzicht->voegBroodToe($naam, $soort, $vorm, $gewicht);

header("Location: index.php");