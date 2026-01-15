<?php

require_once("../config/userDAO.php");

class UserController{
    private $usersObjet=[];
    static private $userDAO;
    public function __construct(){
        self::$userDAO = new UserDAO();
    }

    public static function getUsers():array{
        return self::$userDAO->getUsers();
    }
    // public static function updateUser($user){
    //     UserDAO::updateUserDAO($user);
    // }

    // public static function deleteUser($id){
    //     UserDAO::deleteUserDAO($id);
    // }
}