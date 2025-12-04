<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Tableaux d'animaux"; //Mettre le nom du titre de la page que vous voulez
// echo '<h1>Tableaux animaux</h1>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">     

    <title>Tableau animaux</title>
</head>
<body>

<div class="animauxContainer">
        <h1>Animalerie de l'IFAPME</h1>
     <div class="filtres">
<a href="?type=tous">tous</a>
<a href="?type=chiens">chiens</a>
<a href="?type=chats">chats</a>

</div>
<?php
include_once "classes.php";
include_once "process.php";


?>

    
</body>
</html>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>