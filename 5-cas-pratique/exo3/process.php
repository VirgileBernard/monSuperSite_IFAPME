<link rel="stylesheet" href="formulaire.css">

<?php
require_once __DIR__ . '/config.php';

session_start();

if (isset($_POST['submit'])) {
    $prenom = trim($_POST['prenom'] ?? '');
    $mail   = trim($_POST['mail'] ?? '');
    $age    = trim($_POST['age'] ?? '');

    // validation minimale côté serveur
    $errors = [];
    if ($prenom === '') $errors[] = 'Le prénom est requis.';
    if ($mail === '' || !filter_var($mail, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email invalide.';
    if ($age !== '' && (!is_numeric($age) || $age < 0 || $age > 150)) $errors[] = "Âge invalide.";

    if (empty($errors)) {
        $conn = get_connection();
        $query = "INSERT INTO submissions (prenom, mail, age) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $age_param = ($age === '') ? null : (int)$age;
        $stmt->bind_param('ssi', $prenom, $mail, $age_param);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        $_SESSION['message'] = 'Enregistrement réussi';
        header('Location: index.php');
        exit;
    } else {
        // rediriger avec erreurs (simple méthode)
        $_SESSION['errors'] = $errors;
        header('Location: index.php');
        exit;
    }
}
?>