<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les formulaires"; //Mettre le nom du titre de la page que vous voulez
?>


<!-- exercice1 Les formulaires -->
<?php

// Exercices 3

// Exercice 3
echo "<h2>Exercice 3</h2>";
echo "<p>Formulaire post qui enregistre les données et les affiches sur enregistrer.php</p>";
// Récupérer les informations du formulaire en PHP via le fichier PHP enregistrer.php 
$nouveauMembre = 
// 1-Utilisez la méthodes POST pour envoyer les informations du formulaire au serveur.
'<form method="POST" action="enregistrer.php">

    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" placeholder="Nom" required><br>

    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" placeholder="Prenom" required><br> 
     

    <label for="date_naissance">Date de naissance:</label>
    <input type="date" id="date_naissance" name="date_naissance" required><br>


    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Email" required><br>


    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse" placeholder="Adresse" required><br>


    <input type="submit" name="submit" value="Envoyer">

</form>';   

echo $nouveauMembre;




/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
