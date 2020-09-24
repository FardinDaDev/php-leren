<?php

class Radioprogramma {
    private string $naam;
    private string $omschrijving;
    private array $liedjes;

    public function __construct(string $naam, string $omschrijving, array $liedjes) {
        $this->naam = $naam;
        $this->omschrijving = $omschrijving;
        $this->liedjes = $liedjes;
    }

    public function setLiedjes(string $liedje) {
        $this->liedjes[] = $liedje;
    }

    public function getLiedjes() {
        return $this->liedjes;
    }

    public function getProgramma() {
        return array(
            "naam" => $this->naam,
            "omschrijving" => $this->omschrijving
        );
    }

    public function setNaam(string $n) {
        if(strlen($n) >= 2) {
            $this->naam = $n;
        }
    }

    public function getArtiest() {
        return $this->naam;
    }

}