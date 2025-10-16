<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

$n=rand(1,10);

//exo 13
echo "<h3>Exo 13</h3>";
// ecrire une fonction php qui verifie si un nombre est premier ou pas

echo "<h4>Nombre premier</h4>";
function nombrePremier($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Le nombre " . $n . " est-il premier ? " . (nombrePremier($n) ? "True" : "False") . "<br />";


echo "<h4>Carré d'un nombre</h4>";
function carre($n) {
    return $n * $n;
}
echo "Le carré de " . $n . " est " . carre($n) . "<br />";

echo "<h4>Le logarytme népérien</h4>";
function logarytme($n) {
    return log($n);
}
echo "Le logarytme népérien de " . $n . " est " . logarytme($n) . "<br />";

echo "<h4>La racine carrée</h4>";
function racineCarree($n) {
    return sqrt($n);
}
echo "La racine carrée de " . $n . " est " . racineCarree($n) . "<br />";




/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
