<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Les formulaires"; //Mettre le nom du titre de la page que vous voulez
?>


<?php
echo "<h1>Les formulaires - enregistrer </h1>";

// Affiche les informations reçues du formulaire au sein du paragraphe suivant : 
// Le nouveau membre s’appelle ………….. (prénom du nouveau membre + nom du nouveau membre).
// Il est Né le ………(DDN du nouveau membre).
// Il habite à rue ……………….(Adresse du nouveau membre)

if(isset($_POST["submit"])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $adresse = $_POST["adresse"];
    $date_naissance = $_POST["date_naissance"];

    echo "<p>Le nouveau membre s’appelle " . $prenom . " " . $nom . ".<br>";
    echo "Il est Né le " . $date_naissance . ".<br>";
    echo "Il habite l'adresse : " . $adresse . ".</p>";
}



/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";

?>