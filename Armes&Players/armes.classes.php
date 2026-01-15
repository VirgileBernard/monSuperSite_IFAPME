<?php

class Arme {

    // private static $lastId = 0;
    private static $compteur;
    
    private $id;
    private $name;
    private $damage;

    public function __construct(string $name,int  $damage){
        self::$compteur++;
        $this->id = self::$compteur;
        $this->name = $name;
        $this->damage = $damage;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getDamage(){
        return $this->damage;
    }

    public function displayArme(){
        echo "Arme ID: " . $this->id . "<br>";
        echo "Nom de l'arme: " . $this->name . "<br>";
        echo "Dégâts: " . $this->damage . "<br><br>";
    }
}