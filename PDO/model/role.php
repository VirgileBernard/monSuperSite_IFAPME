<?php

class Role {
    
    private $id_role;
    private $nom;

    public function __construct($id_role, $nom){
        $this->id_role=$id_role;
        $this->nom=$nom;
    }

    //getters

    public function getIdRole(){
        return $this->id_role;
    }

    public function getNom(){
        return $this->nom;
    }

    //setters

    public function setIdRole($id_role){
        $this->id_role=$id_role;
    }

    public function setNom($nom){
        $this->nom=$nom;
    }
}