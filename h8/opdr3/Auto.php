<?php

interface AutoOverzicht {
    public function voegAutoToe();
    public function getGefilterdeLijst();
    public function getAutoLijst();
}

class Auto implements AutoOverzicht {
    private string $merk;
    private string $type;
    private int $prijs;
    private string $url;
    private array $auto;

    public function __construct(string $merk, string $type, int $prijs, string $url) {
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->url = $url;
    }

    public function voegAutoToe() {
        
    }

    public function getGefilterdeLijst() {
        
    }

    public function getAutoLijst() {
        
    }

}