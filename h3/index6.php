<?php

$leeftijd = 66;
$bedrag = 10;

if($leeftijd > 65) {
    $bedrag *= 0.5;
} else if($leeftijd <= 12) {
    $bedrag *= 0.5;
} else if($leeftijd < 3) {
    $bedrag = 0;
}

echo $bedrag;