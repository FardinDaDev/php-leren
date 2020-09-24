<?php

include_once("Radioprogramma.php");

$skrillex = new Radioprogramma("Skrillex", "Goede artiest", array("Kyoto", "Bangarang", "Scary Monsters & Sprites"));

foreach($skrillex->getLiedjes() as $liedje) {
    echo $skrillex->getArtiest() . " - " . $liedje . "<br>";
}