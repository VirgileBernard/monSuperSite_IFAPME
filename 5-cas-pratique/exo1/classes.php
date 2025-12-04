<?php

class Animal {
    private $name;
    private $age;
    private $type;
        //constructeur
    public function __construct($name, $age, $type) {
        $this->name = $name;
        $this->age = $age;
        $this->type = $type;
    }

        // getter pour le type (et utile ailleurs)
    public function getType() {
        return $this->type;
    }


public function afficherAnimal() {
echo "--------------------------------<br />";
echo "Nom: " . $this->name . "<br />";
echo "Âge: " . $this->age . " ans<br />";
echo "Type: " . $this->type . "<br />";
echo "--------------------------------<br />";

}

public static function afficherAnimalerie($animaux){
    foreach($animaux as $animal){
        $animal->afficherAnimal();
    }
}

public static function afficherAnimalParType($animaux, $type){
    foreach($animaux as $animal){
        if($animal->getType() === $type){
            $animal->afficherAnimal();
        }
    }
}
}


