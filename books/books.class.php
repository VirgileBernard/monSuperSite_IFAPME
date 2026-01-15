<?php

class Book{

    private $name;
    private $edition;
    private $author;
    private $publicationDate;


    public function __construct($name, $edition, $author, $publicationDate){ 
        $this->name = $name;
        $this->edition = $edition;
        $this->author = $author;
        $this->publicationDate = $publicationDate;
    }

    // getters
    public function getName(){
        return $this->name;
    }

    public function getEdition(){
        return $this->edition;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getPublicationDate(){
        return $this->publicationDate;
    }

 // Méthode pour afficher un livre
    public function display() {
        echo "Titre : {$this->name} | Édition : {$this->edition} | Auteur : {$this->author} | Date : {$this->publicationDate}<br>";
    }
}

?>