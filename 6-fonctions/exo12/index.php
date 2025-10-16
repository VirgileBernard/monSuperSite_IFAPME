<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

$n=rand(1,10);
$tableauNombre=[15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

//exo 12
echo "<h3>Exo 12</h3>";
// Écrivez une fonction PHP qui : Reçoit en paramètres un tableau(array) et un nombre quelconque. Retourne TRUE si le nombre existe dans le tableau, FALSE sinon.

function existeDansTableau($param, $n) {
    foreach ($param as $valeur) {
        if ($valeur == $n) {
            return true;
        }
    }
    return false;
}

echo "Le nombre " . $n.  "existe dans le tableau ? " . (existeDansTableau($tableauNombre, $n) ? "True" : "False") . "<br />";


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
