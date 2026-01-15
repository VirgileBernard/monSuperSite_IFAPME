<?php  


class Armes {
    private static $idCounter = 0;
    private $id;
    private $name;
    private $damage;
    private $description;
    private $level;


    public function __construct(string $name, int $damage, string $description, int $level){
        self::$idCounter++;
        $this->id = self::$idCounter;
        $this->name = $name;
        $this->damage = $damage;
        $this->description = $description;
        $this->level = $level;
    }


    //getters
}