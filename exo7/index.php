<?php

require 'tableauArmes.php';


echo "<h2>Liste des armes disponibles :</h2>";

foreach ($armes as $arme){
    echo "<h3>" . $arme['nom'] . "</h3>";
    echo "Dégâts : " . $arme['degats'] . "<br>";
    echo "<p> Description : " . $arme['description'] . "</p>";
    echo "-----------------------<br>";
}