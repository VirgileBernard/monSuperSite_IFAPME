<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Les formulaires"; //Mettre le nom du titre de la page que vous voulez
?>


<!-- exercice1 Les formulaires -->
<?php

// Exercices 1
echo "<h2>Exercice 1</h2>";
// Créer un formulaire HTML pour enregistrer les informations d’un nouveau membre dans un club de tennis. Le formulaire contient les éléments suivants :
//  : Nom, Prénom,Date de naissance, Email, Adresse

echo "<p>Formulaire post qui envoie les infos à submit_form.php</p>";
$tennisClubForm = 
// 1-Utilisez la méthodes POST pour envoyer les informations du formulaire au serveur.
'<form method="POST" action="submit_form.php">

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

echo $tennisClubForm;







/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
