<?php

class Player{
    private $name;
    private $strength;
    private $hp;
    private array $armes = [];
    
    public function __construct($name, $strength, $hp){
        $this->name = $name;
        $this->strength = $strength;
        $this->hp = $hp;
        $this->armes = [];
    }
    
    // Ajouter une arme au joueur
    public function addArme(Arme $armes): void
    {
        $this->armes[] = $armes;
    }

    public function getName(){
        return $this->name;
    }

    public function getStrength(){
        return $this->strength;
    }

    public function getHp(){
        return $this->hp;
    }

    public function getArmes(): array{
        return $this->armes;
    }

    public function displayPlayer(){
        echo "Player Name: " . $this->name . "<br>";
        echo "Strength: " . $this->strength . "<br>";
        echo "HP: " . $this->hp . "<br>";
        echo "Arme: <br>";
        foreach ($this->armes as $arme) {
            $arme->displayArme();
        }
        echo "<br>";
    }
}