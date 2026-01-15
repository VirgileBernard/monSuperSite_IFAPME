<?php

class House {
    private static $lastId = 0;
    private $creationDate;
    private $nbrChambre;
    private $surface;

    public function __construct($creationDate, $nbrChambre, $surface){
        self::$lastId++;
        $this->id = self::$lastId;
        $this->creationDate = $creationDate;
        $this->nbrChambre = $nbrChambre;
        $this->surface = $surface;
    }

    public function display(){
        echo "Maison ID: " . $this->id . "<br>";
        echo "Date de création: " . $this->creationDate . "<br>";
        echo "Nombre de chambres: " . $this->nbrChambre . "<br>";
        echo "Surface: " . $this->surface . " m²<br><br>";
    }
}

