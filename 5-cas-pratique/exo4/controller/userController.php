<?php
session_start();
require_once __DIR__ . "/../data/userDAO.php";
if (isset($_POST['saveUser'])) { 
   // 1. Collecte et Nettoyage des données (IMPORTANT : Sécurité et Robustesse)
   // Utilisation de trim() pour supprimer les espaces blancs inutiles.
   // Utilisation de ?? '' pour garantir que la variable est définie (Opérateur de coalescence nul).
   $nom = trim($_POST['nom'] ?? '');
   $prenom = trim($_POST['prenom'] ?? '');
   $mail = trim($_POST['mail'] ?? '');
   $ddn = trim($_POST['ddn'] ?? '');
   $gender = $_POST['gender'] ?? ''; // trim() n'est pas nécessaire pour un champ radio
   
   // 2. Création d'un tableau associatif pour une créer user model
   $user = [
       'nom' => $nom,
       'prenom' => $prenom,
       'mail' => $mail,
       'ddn' => $ddn,
       'gender' => $gender,
   ];

   // 3. Validation des données côté serveur (Minimum requis)
   // C'est essentiel même si vous avez une validation JavaScript.
   if (empty($user['nom']) || empty($user['mail'])) {
       // Redirection avec un message d'erreur si la validation échoue.
       $_SESSION['msg_type'] = 'warning';
       $_SESSION['message'] = "Erreur: Le nom et l'email sont obligatoires.";
       header("Location: index.php"); 
       exit();
   }
   // verifier si la ddn est < date d'aujourd'hui
    // $today = date("Y-m-d");
    // if (!empty($user['ddn']) || $user['ddn'] >= $today) {
    //      $_SESSION['msg_type'] = 'warning';
    //      $_SESSION['message'] = "Erreur: La date de naissance doit être antérieure à aujourd'hui.";
    //      header("Location: index.php"); 
    //      exit();
    // }

   
   
   // 4. Appel de la fonction de sauvegarde
   saveUser($user);
   
   // 5. Redirection de succès et arrêt du script
   $_SESSION['msg_type'] = 'success';
   $_SESSION['message'] = "L'utilisateur {$user['prenom']} {$user['nom']} a été ajouté.";
   header("Location: ../view/index.php");
   exit(); // 🛑 CRUCIAL : Arrête l'exécution après la redirection
}
  


elseif (isset($_POST['delete_id'])) {
    $id = intval($_POST['delete_id']);
    $deleted = deleteUser($id); // deleteUser() renverra true/false
    if ($deleted) {
        $_SESSION['msg_type'] = 'success';
        $_SESSION['message'] = "L'utilisateur a été supprimé.";
    } else {
        $_SESSION['msg_type'] = 'warning';
        $_SESSION['message'] = "Suppression impossible : utilisateur introuvable.";
    }
    header("Location: ../view/index.php");
    exit();
}


elseif(isset($_POST['edit_id'])) {
    $id= intval($_POST['edit_id']);
    $updatedUser= getUser($id);
    if($updatedUser){
        // Logique de mise à jour ici
        $_SESSION['msg_type'] = 'success';
        $_SESSION['message'] = "L'utilisateur a été mis à jour.";
    } else {
        $_SESSION['msg_type'] = 'warning';
        $_SESSION['message'] = "Mise à jour impossible : utilisateur introuvable.";
        header("Location: ../view/index.php");
        exit();
    }
}

function getUsers(){
    $users=getUsersDAO();
   return $users ;
}

function updateUser(){
    return updateUserDAO($user);
}



function saveUser($user){
   return saveUserDAO($user);
}

function deleteUser($idUser){
    return deleteUserDAO($idUser);
}
?>