<?php

class User{

    private $id;
    private $fname;
    private $lname;
    private $email;
    private $phone;
    private $password;
    private $role;

    public function __construct($id=null, $fname, $lname,$email, $phone, $password=null, $role){
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
        $this->role = $role;
    }

    //getters

    public function getFname(){
        return $this->fname;
    }
    public function getLname(){
        return $this->lname;
    }
    public function getId(){
        return $this->id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getRole(){
        return $this->role;
    }

    //setters

        //setters
    public function setId($id){
        $this->id=$id;
    }

    public function setFname($fname){
        $this->fname=$fname;
    }

    public function setLname($lname){
        $this->lname=$lname;    
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function setPhone($phone){
        $this->phone=$phone;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function setRole($role){
        $this->role=$role;
    }

    public function __toString(){
        return "Prénom : " . $this->fname . " - Nom : " . $this->lname;
    }
}


