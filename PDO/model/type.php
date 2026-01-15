<?php

class Type {
    
    private $id_type;
    private $nom;

    public function __construct($id_type, $nom){
        $this->id_type=$id_type;
        $this->nom=$nom;
    }

    //getters

    public function getIdType(){
        return $this->id_type;
    }

    public function getNom(){
        return $this->nom;
    }

    //setters

    public function setIdType($id_type){
        $this->id_type=$id_type;
    }

    public function setNom($nom){
        $this->nom=$nom;
    }
}