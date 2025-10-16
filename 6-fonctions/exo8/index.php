<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

//exo 8
echo "<h3>Exo 8</h3>";
// Ecrivez une fonction PHP (afficher) qui parcoure un tableau (array) et affiche tous les éléments du tableau

$tableauNombre=[15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

function afficher($param) {
    foreach ($param as $cle => $valeur) {
        echo "La clé" . $cle ." possède la valeur " . $valeur . "<br />";
    }
}
afficher($tableauNombre);



/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
