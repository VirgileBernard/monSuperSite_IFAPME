<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

$tableauNombre=[15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

//exo 9
echo "<h3>Exo 9</h3>";
// Écrivez une fonction PHP qui : Reçoit en paramètres un tableau(array) et retourne la moyenne des nombres contenus dans ce tableau.
function calculMoyenne($param) {
    $somme = 0;
    $count = count($param);
    foreach ($param as $valeur) {
        $somme += $valeur;
    }
    return $somme / $count;
}
echo "La moyenne des notes du tableau est " . calculMoyenne($tableauNombre) . "<br />";

/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
