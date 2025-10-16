<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

$tableauNombre=[15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

//exo 11
echo "<h3>Exo 11</h3>";
// Ecrivez une fonction PHP qui : Reçoit en paramètres un tableau(array) et retourne le minimum des nombres contenus dans ce tableau.

function trouverMinimun($param){
    $min= $param[0];
    foreach ($param as $valeur){
        if ($valeur < $min){
            $min = $valeur;
        }
    }
    return $min;
}
echo "Le minimum des notes du tableau est " . trouverMinimun($tableauNombre) . "<br />";

/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
