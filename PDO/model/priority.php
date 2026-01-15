<?php

class Priority {
    
    private $id_priority;
    private $nom;

    public function __construct($id_priority, $nom){
        $this->id_priority=$id_priority;
        $this->nom=$nom;
    }

    //getters

    public function getIdPriority(){
        return $this->id_priority;
    }

    public function getNom(){
        return $this->nom;
    }

    //setters

    public function setIdPriority($id_priority){
        $this->id_priority=$id_priority;
    }

    public function setNom($nom){
        $this->nom=$nom;
    }
}