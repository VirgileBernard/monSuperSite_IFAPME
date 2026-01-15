<?php
require_once "armes.classes.php";
require_once "players.classes.php";

$arme1 = new Arme("Epee", 25);
$arme2 = new Arme("Arc", 15);
$arme3 = new Arme("Lance", 20);
$arme4 = new Arme("Dague", 12);
$arme5 = new Arme("Massue", 30);
$arme6 = new Arme("Arbalete", 22);
$arme7 = new Arme("Hache", 28);
$armes = [$arme1, $arme2, $arme3, $arme4, $arme5, $arme6, $arme7];

// ou 
// $arme1 = new Arme();
// $arme1->setName("Epee");
// $arme1->setDamage(25);


$player1 = new Player("Virgile", 100, 100);
$player2 = new Player("Alice", 80, 120);
$player3 = new Player("Myriam", 90, 110);
$players = [$player1, $player2, $player3];

$player1->addArme($arme1);
$player1->addArme($arme4);
$player2->addArme($arme2);

