<?php

class AutoOverzicht {
    public array $autoos;

    public function __construct() {
        $this->autoos = [];
    }

    public function getGefilterdeLijst($minprijs, $maxprijs, $merk) {
        $gefilterdeLijst = [];

        foreach ($this->autoos as $auto) {
            if ($auto->getPrijs() >= $minprijs && $auto->getPrijs() <= $maxprijs && $auto->getMerk() === $merk) {
                $gefilterdeLijst[] = $auto;
            } else if ($auto->getPrijs() >= $minprijs && $auto->getPrijs() <= $maxprijs && $merk === "") {
                $gefilterdeLijst[] = $auto;
            }
        }

        return $gefilterdeLijst;
    }

    public function voegAutoToe($auto) {
        $this->autoos[] = $auto;
    }

    public function getAutoLijst() {
        return $this->autoos;
    }
}

class Auto {
    private string $merk;
    private string $type;
    private int $prijs;
    private string $url;

    public function __construct(string $merk, string $type, int $prijs, string $url) {
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->url = $url;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getType() {
        return $this->type;
    }

    public function getPrijs() {
        return $this->prijs;
    }

    public function getUrl() {
        return $this->url;
    }


}