<?php

$animal1 = new Animal("Milo", 3, "chat");
$animal2 = new Animal("Buddy", 5, "chien");
$animal3 = new Animal("Pipette", 2, "chat");
$animal4 = new Animal("Max", 4, "chien");
$animal5 = new Animal("Oliver", 1, "chat");
$animal6 = new Animal("Charlie", 6, "chien");
$animaux = [$animal1, $animal2, $animal3, $animal4, $animal5, $animal6];



if(isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] !== "tous"){
    if($_GET['type'] === "chiens"){
        Animal::afficherAnimalParType($animaux, "chien");       
    }
    elseif($_GET['type'] === "chats"){
        Animal::afficherAnimalParType($animaux, "chat");       
    }
}
 else{
        Animal::afficherAnimalerie($animaux);
    }




