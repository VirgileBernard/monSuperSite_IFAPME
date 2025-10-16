<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
echo "<h3>Exo 1</h3>";
// exo 1 
// Ecrivez une foncion afficher_mois qui reçoit en paramètre votre tableau (array) des mois de l’année et affiche :

$param = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
);  

function afficherMois($param) {
    foreach ($param as $cle => $valeur) {
        echo "Le mois de " . $cle . " a " . $valeur . " jours<br />";
    }
}

afficherMois($param);


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
