<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

//exo 7
echo "<h3>Exo 7</h3>";
// Écrivez une fonction PHP factorielle qui reçoit en paramètre un nombre et retourne son factorielle.

$n=rand(1,10);

function factorielle($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
echo "La factorielle de $n est " . factorielle($n) . "<br />";


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
