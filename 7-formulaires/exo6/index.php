<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Les formulaires"; //Mettre le nom du titre de la page que vous voulez
?>


<!-- exercice1 Les formulaires -->
<?php

// Exercices 6
//Exercice 6
echo "<h2>Exercice 6</h2>";
// Dans la perspective de création d’un site d’agence immobilière, créer un formulaire comprenant trois boutons Submit nommés « Vendre », « Acheter » et « Louer». 
// En fonction du choix effectué par le visiteur, le rediriger vers une page spécialisée dont le contenu réponde au critère choisi.
echo "<p>Formulaire avec 3 boutons submit qui redirige vers vendre.php, acheter.php et louer.php</p>";
$realEstateForm =
'<form method="POST" action="">
    <input type="submit" name="action" value="Vendre" formaction="vendre.php">
    <input type="submit" name="action" value="Acheter" formaction="acheter.php">
    <input type="submit" name="action" value="Louer" formaction="louer.php">
</form>';

echo $realEstateForm;




/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
