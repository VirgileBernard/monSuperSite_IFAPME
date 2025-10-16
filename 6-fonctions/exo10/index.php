<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

$tableauNombre=[15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

//exo10
echo "<h3>Exo 10</h3>";
// Écrivez une fonction PHP qui : Reçoit en paramètres un tableau(array) et retourne le maximum des nombres contenus dans ce tableau.

function trouverMaximum($param) {
    $max = $param[0];
    foreach ($param as $valeur) {
        if ($valeur > $max) {
            $max = $valeur;
        }
    }
    return $max;
}
echo "Le maximum des notes du tableau est " . trouverMaximum($tableauNombre) . "<br />";


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
