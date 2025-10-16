<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les formulaires"; //Mettre le nom du titre de la page que vous voulez
?>


<!-- exercice1 Les formulaires -->
<?php

// Exercices 4
echo "<h2>Exercice 4</h2>";
echo "<p>Formulaire post qui enregistre l'adresse et l'affiche sur adresse_client.php</p>";
// Créer un formulaire comprenant un groupe de champs ayant pour titre "Adresse client". Le groupe doit permettre la saisie du nom, du prénom,de l’adresse, de la ville et du code postal.
$adresseClient = 
'<form method="POST" action="adresse_client.php">

    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" placeholder="Nom" required><br>

    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" placeholder="Prenom" required><br> 
         
    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse" placeholder="Adresse" required><br>

    <label for="ville">Ville:</label>
    <input type="text" id="ville" name="ville" placeholder="Ville" required><br>

    <label for="code_postal">Code Postal:</label>
    <input type="text" id="code_postal" name="code_postal" placeholder="Code Postal" required><br>

    <input type="submit" name="submit" value="Envoyer">
</form>';

echo $adresseClient;




/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
