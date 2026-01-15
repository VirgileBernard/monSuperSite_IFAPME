<?php

require_once "armes.classes.php";

$arme1 = new Armes("Epee", 25, "Une épée tranchante.", "images/epee/epee1.png");
$arme2 = new Armes("Arc", 15, "Un arc puissant.", "images/arc/arc1.png");
$arme3 = new Armes("Hache", 28, "Une hache tranchante.", "images/hache/hache1.png");
$arme4 = new Armes("Fleau", 12, "Une dague rapide.", "images/fleau/fleau1.png");

$armes = [$arme1, $arme2, $arme3, $arme4];