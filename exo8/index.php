<?php  

require_once "armes.classes.php";
require_once "armes.process.php";

foreach ($armes as $arme){
    $arme->displayArme();
}