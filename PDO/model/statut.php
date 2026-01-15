<?php

class Statut {
    
    private $id_statut;
    private $nom;

    public function __construct($id_statut, $nom){
        $this->id_statut=$id_statut;
        $this->nom=$nom;
    }

    //getters

    public function getIdStatut(){
        return $this->id_statut;
    }

    public function getNom(){
        return $this->nom;
    }

    //setters

    public function setIdStatut($id_statut){
        $this->id_statut=$id_statut;
    }

    public function setNom($nom){
        $this->nom=$nom;
    }
}