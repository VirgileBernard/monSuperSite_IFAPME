<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Les formulaires"; //Mettre le nom du titre de la page que vous voulez
?>


<?php
session_start();

echo "<h1>Les formulaires - adresse client </h1>";

if (isset($_POST["submit"])) {
    // Récupération et sécurisation des données
    $nouveauClient = [
        'nom' => htmlspecialchars(trim($_POST["nom"])),
        'prenom' => htmlspecialchars(trim($_POST["prenom"])),
        'adresse' => htmlspecialchars(trim($_POST["adresse"])),
        'ville' => htmlspecialchars(trim($_POST["ville"])),
        'code_postal' => htmlspecialchars(trim($_POST["code_postal"]))
    ];

    // Initialiser le tableau si besoin
    if (!isset($_SESSION['clients'])) {
        $_SESSION['clients'] = [];
    }
    // Ajouter le nouveau client
    $_SESSION['clients'][] = $nouveauClient;
}

// Affichage sous forme de tableau HTML si les données existent
if (!empty($_SESSION['clients'])) {
    echo "<h2>Liste des clients</h2>";
    echo "
    <table border='1' cellpadding='8' cellspacing='0'>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
        </tr>
    ";
    foreach ($_SESSION['clients'] as $client) {
        echo "<tr>
            <td>{$client['nom']}</td>
            <td>{$client['prenom']}</td>
            <td>{$client['adresse']}</td>
            <td>{$client['ville']}</td>
            <td>{$client['code_postal']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Aucune donnée reçue.</p>";
}



/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";

?>