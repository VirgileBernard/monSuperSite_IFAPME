<?php
require_once __DIR__ . "/config.php";


// récupérer TOUS les utilisateurs
function getUsersDAO(){

    $connection = get_connection();
    $sql = "SELECT * FROM users";
    $result = $connection->query($sql);

    if(!$result){
        die("Erreur SQL : " . $connection->error);
    }
    
    $users = $result->fetch_all(MYSQLI_ASSOC); 
    $connection->close();
    return $users;
}


// sauvegarder un utilisateur
function saveUserDAO($user){

    // 1. Calcul de l'âge
    $birthDate = new DateTime($user['ddn']);
    $today = new DateTime();
    $age = $birthDate->diff($today)->y; // Âge en années

    $connection = get_connection();
    
    // Requête SQL avec 6 marqueurs de position (?). L'ordre est crucial.
    $query = "INSERT INTO users (prenom, nom, mail, gender, ddn, age) VALUES (?, ?, ?, ?, ?, ?)";
    $statement = $connection->prepare($query);
        
    if ($statement === false) {
        error_log("Erreur de préparation SQL: " . $connection->error);
        return false;
    }
    
    // 2. Liaison des paramètres: "sssssi" (5 strings, 1 integer)
    $success = $statement->bind_param(
        "sssssi", 
        $user['prenom'],  // 1. firstname
        $user['nom'],     // 2. lastname
        $user['mail'],    // 3. email
        $user['gender'],  // 4. gender
        $user['ddn'],     // 5. birthdate
        $age              // 6. age (integer)
    );
    
    if ($success === false) {
         error_log("Erreur de liaison des paramètres: " . $statement->error);
         $statement->close();
         $connection->close();
         return false;
    }
    
    // 3. Exécution
    $success = $statement->execute();
    
    if (!$success) {
        error_log("Erreur d'exécution SQL: " . $statement->error);
    }
    
    $statement->close();
    $connection->close();
    

}



// ... autres fonctions DAO
// function getUser($id){
//     $connxion=getConnexion();

//     $sql= "select * from users where id= ?";
// }



//foncition pour supprimer un utilisateur
function deleteUserDAO($id) {
    $connection = get_connection();

    $sql = "DELETE FROM users WHERE id = ?";
    $statement = $connection->prepare($sql);
        if ($statement === false) {
        error_log("Erreur de préparation SQL: " . $connection->error);
        return false;
    }
    
    $statement->bind_param("i", $id);
    $statement->execute();

    $rows_affected = $statement->affected_rows;

    $statement->close();
    $connection->close();
    return $rows_affected > 0;
}


//function pour éditer un utilisateur
function editUserDAO($user){
    // À implémenter si nécessaire
    $connexion = get_connection();
    $query = "SELECT id, prenom, nom, mail, gender, ddn, age FROM users WHERE id = ?";

    $statement = $connexion->prepare($query);

    if($statement === false){
        error_log("Erreur de préparation SQL: " . $connexion->error);
        $connection->close();
        return false;
    }

    $succes= $statement->bind_param("i", $user['id']);

    if($succes === false){
        error_log("Erreur de liaison des paramètres: " . $statement->error);
        $statement->close();
        $connexion->close();
        return false;
    }

    $succes_excecution = $statement->execute();

    if(!$succes_excecution){
        error_log("Erreur d'exécution SQL: " . $statement->error);
        $statement->close();
        $connexion->close();
        return false;
    }

    $result = $statement->get_result();
    $user=$result->fetch_assoc();

    $statement->close();
    $connexion->close();

    return $user;
}

function updateUserDAO($user){
     // 1. Calcul de l'âge
    $birthDate = new DateTime($user['ddn']);
    $today = new DateTime();
    $age = $birthDate->diff($today)->y; // Âge en années

    $connection = get_connection();
    
    // Requête SQL avec 6 marqueurs de position (?). L'ordre est crucial.
    $query = "UPDATE INTO users (prenom, nom, mail, gender, ddn, age) VALUES (?, ?, ?, ?, ?, ?)";
    $statement = $connection->prepare($query);
        
    if ($statement === false) {
        error_log("Erreur de préparation SQL: " . $connection->error);
        return false;
    }
    
    // 2. Liaison des paramètres: "sssssi" (5 strings, 1 integer)
    $success = $statement->bind_param(
        "sssssi", 
        $user['prenom'],  // 1. firstname
        $user['nom'],     // 2. lastname
        $user['mail'],    // 3. email
        $user['gender'],  // 4. gender
        $user['ddn'],     // 5. birthdate
        $age              // 6. age (integer)
    );
    
    if ($success === false) {
         error_log("Erreur de liaison des paramètres: " . $statement->error);
         $statement->close();
         $connection->close();
         return false;
    }
    
    // 3. Exécution
    $success = $statement->execute();
    
    if (!$success) {
        error_log("Erreur d'exécution SQL: " . $statement->error);
    }
    
    $statement->close();
    $connection->close();
    


  }

if(isset($_POST['edit_id'])) {
    $id = intval($_POST['edit_id']);
    $user = getUser($id);
    if ($user) {
        // rediriger vers le formulaire en passant l'id (le formulaire doit appeler getUser pour pré-remplir)
        header("Location: ../view/userForm.php?id=" . $id);
        exit();
    } else {
        $_SESSION['msg_type'] = 'warning';
        $_SESSION['message'] = "Utilisateur introuvable.";
        header("Location: ../view/index.php");
        exit();
    }
}

function getUser($idUser){
    // editUserDAO attend un tableau contenant 'id'
    return editUserDAO(['id' => intval($idUser)]);
}

?>