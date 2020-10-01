<?php

class Brood {
    private int $id;
    private string $naam;
    private string $soort;
    private string $vorm;
    private int $gewicht;

    public function __construct(int $id, string $naam, string $soort, string $vorm, int $gewicht) {
        $this->id = $id;
        $this->naam = $naam;
        $this->soort = $soort;
        $this->vorm = $vorm;
        $this->gewicht = $gewicht;
    }

    public function getNaam() {
        return $this->naam;
    }

    public function getSoort() {
        return $this->soort;
    }

    public function getVorm() {
        return $this->vorm;
    }

    public function getGewicht() {
        return $this->gewicht;
    }

    public function getId() {
        return $this->id;
    }

}

class BroodOverzicht {
    private $dbh;
    private $broodjes = [];

    public function __construct() {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=bakkerij', "root", "");
        
        } catch (PDOException $e) {
            echo "Error! " . $e->getMessage();
            die();
        }        
    }

    public function voegBroodToe($naam, $soort, $vorm, $gewicht) {
        if ($naam != "" && $gewicht != "" && $vorm != "" && $gewicht != "") {
            $statement = $this->dbh->prepare("INSERT INTO brood (naam, soort, vorm, gewicht) VALUES('$naam','$soort','$vorm','$gewicht')") or die();
            $statement->execute() or die();
        }
    }

    public function getBroodjes() {
        $statement = $this->dbh->prepare("SELECT * FROM brood") or die();
        $statement->execute() or die();

        while ($row = $statement->fetch()) {
            $nieuwBroodje = new Brood($row['ID'], $row['naam'], $row['soort'], $row['vorm'], $row['gewicht']);
            $this->broodjes[] = $nieuwBroodje;
        }
        return $this->broodjes;
    }

    public function updateBroodjes($id, $naam, $soort, $vorm, $gewicht) {
        if ($id != "" && $naam != "" && $gewicht != "" && $vorm != "" && $gewicht != "") {

            $statement = $this->dbh->prepare("UPDATE brood SET naam=$naam, soort=$soort, vorm=$vorm, gewicht=$gewicht WHERE ID=$id") or die();
            $statement->execute() or die();
        }
    }
}
