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
   
   // 2. Création d'un tableau associatif pour une meilleure lisibilité
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


   
   
   // 4. Appel de la fonction de sauvegarde
   saveUser($user);
   
   // 5. Redirection de succès et arrêt du script
   $_SESSION['msg_type'] = 'success';
   $_SESSION['message'] = "L'utilisateur {$user['prenom']} {$user['nom']} a été ajouté.";
   header("Location: ../view/index.php");
   exit(); // 🛑 CRUCIAL : Arrête l'exécution après la redirection
}
  

function getUsers(){
    $users=getUsersDAO();
   return $users ;
}

function getUser($idUser){

}



function saveUser($user){
   saveUserDAO($user);
}

function deleteUser($idUser){

}
?>