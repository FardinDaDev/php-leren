<?php

function celsiusToFahrenheit(int $celsius) {
    $fahrenheit = $celsius * 1.8 + 32;
    echo $fahrenheit;
}

function divisibleThree(int $number) {
    if($number / 3) {
        return true;
    } else {
        return false;
    }
}

function flipString(string $flippo) {
    return strrev($flippo);
}

?>