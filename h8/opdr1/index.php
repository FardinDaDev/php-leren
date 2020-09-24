<?php

include_once("Radioprogramma.php");

$skrillex = new Radioprogramma("Skrillex", "Goede artiest", array("Kyoto", "Bangarang", "Scary Monsters & Nice Sprites"));

foreach($skrillex->getLiedjes() as $liedje) {
    echo $skrillex->getArtiest() . " - " . $liedje . "<br>";
}
