<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

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

//exo 4
echo "<h3>Exo 4</h3>";
// Ecrivez une foncion afficher_3bis qui reçoit en paramètre votre tableau (array) des mois de l’année et affiche 

function afficher3_bis($param) {
    foreach ($param as $cle => $valeur){
        if ($valeur <= 30){
            echo "Le mois de 30 jours est " . $cle . " avec " . $valeur . " jours<br />";
        }
    }
}

afficher3_bis($param);


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
