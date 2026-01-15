<?php

class Client{

    private $id_client;
    private $fname;
    private $lname;
    private $email;
    private $phone_number;

     function __construct($id_client, $fname, $lname, $email, $phone_number){
        $this->id_client=$id_client;
        $this->fname=$fname;
        $this->lname=$lname;
        $this->email=$email;
        $this->phone_number=$phone_number;
    }

    //getters

    public function getIdClient(){
        return $this->id_client;
    }

    public function getFname(){
        return $this->fname;
    }

    public function getLname(){
        return $this->lname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPhoneNumber(){
        return $this->phone_number;
    }

   

    //setters
    public function setId($id_client){
        $this->id_client=$id_client;
    }

    public function setFname($fname){
        $this->fname=$fname;
    }

    public function setLname($lname){
        $this->lname=$lname
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function setPhone($phone_number){
        $this->phone_number=$phone_number;
    }
}