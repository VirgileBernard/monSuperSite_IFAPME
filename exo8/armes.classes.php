<?php

class Armes {
    private static $idCounter = 0;
    private $id;
    private $name;
    private $damage;
    private $description;
    private $image;


    public function __construct(string $name, int $damage, string $description, string $image){
        self::$idCounter++;
        $this->id = self::$idCounter;
        $this->name = $name;
        $this->damage = $damage;
        $this->description = $description;
        $this->image = $image;
    }

    //getters

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getDamage(){
        return $this->damage;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getImage(){
        return $this->image;
    }

    //setters
    public function setName(string $name){
        $this->name = $name;
    }
    public function setDamage(int $damage){
        $this->damage = $damage;
    }
    public function setDescription(string $description){
        $this->description = $description;
    }
    public function setImage(string $image){
        $this->image = $image;
    }

    public function displayArme(){
        echo "<img src='" . $this->image . "' alt='" . $this->name . "' width = 150px><br>";
        echo "<h3>" . $this->name . "</h3>";
        echo "Dégâts : " . $this->damage . "<br>";
        echo "<p> Description : " . $this->description . "</p>";
        echo "-----------------------<br>";
    }
}