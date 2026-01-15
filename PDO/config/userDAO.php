<?php

//toutes les opérations CRUD 
class UserDAO{

    public static function getUsers(){
        $con = MonPDO::getPDO();
        $requete = "SELECT fname, lname, email, phone_number, 'name' as 'role'
         FROM users 
         JOIN roles
         ON role_id=id_role";
        $stmt = $con->prepare($requete);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }


    public static function getUser($id){
        $con = MonPDO::getPDO();
        $requete = "SELECT * FROM users WHERE id = :id";
        $stmt = $con->prepare($requete);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public static function addUserDAO($user){
        $con = MonPDO::getPDO();
        $requete = "INSERT INTO users (fname, lname) VALUES (:fname, :lname)";
        $stmt = $con->prepare($requete);

        $stmt->bindValue(':fname', $user->getFname(), PDO::PARAM_STR);
        $stmt->bindValue(':lname', $user->getLname(), PDO::PARAM_STR);

        $stmt->execute();

    }

    public static function updateUserDAO($user){
        $con = MonPDO::getPDO();
        $requete = "UPDATE users SET
        fname = :fname,
        lname = :lname,
        email= :email,
        phone_number = :phone_number,
        role_id= :role_id
        WHERE id_user = :id_user";
        $stmt = $con->prepare($requete);
        $stmt->bindValue(':fname', $user->getFname(), PDO::PARAM_STR);
        $stmt->bindValue(':lname', $user->getLname(), PDO::PARAM_STR);
        $stmt->bindValue(':email', $user->getEmail(), PDO::PARAM_STR);   
        $stmt->bindValue(':phone_number', $user->getPhone(), PDO::PARAM_STR);
        $stmt->bindValue(':role_id', $user->getRole(), PDO::PARAM_INT);
        $stmt->bindValue(':id', $user->getId(), PDO::PARAM_INT);
        $stmt->execute();
    }
    

    public static function deleteUserDAO($id){
        $con = MonPDO::getPDO();
        $requete = "DELETE FROM users WHERE id = :id";
        $stmt = $con->prepare($requete);
        $stmt->bindValue(':id', $user->getId(), PDO::PARAM_INT);
        $stmt->execute();
    }
}