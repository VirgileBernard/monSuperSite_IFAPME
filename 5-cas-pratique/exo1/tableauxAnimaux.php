<?php

echo '<h1>Tableaux animaux</h1>';


// Créer un tableau associatif pour chaque animal comportant un nom, un âge, et un type (« chat » ou « chien »)
$animal1 = [
    'nom' => 'Milo',
    'age' => 3,
    'type' => 'chat'
];
$animal2 = [
    'nom' => 'Bella',
    'age' => 5,
    'type' => 'chien'
];
$animal3 = [
    'nom' => 'Luna',
    'age' => 2,
    'type' => 'chat'
];
$animal4 = [
    'nom' => 'Max',
    'age' => 4,
    'type' => 'chien'
];
$animal5 = [
    'nom' => 'Oliver',
    'age' => 1,
    'type' => 'chat'
];
$animal6 = [
    'nom' => 'Charlie',
    'age' => 6,
    'type' => 'chien'
];


// Créer un tableau qui contient tous les animaux
$tableauAnimaux = [$animal1, $animal2, $animal3, $animal4, $animal5, $animal6];


// Réaliser 3 boutons permettant de filtrer les animaux : Tous les animaux, Chats, Chiens
// Boutons de filtre (méthode GET)
echo '<form method="get" style="margin-bottom:1em;">';
echo '<button type="submit" name="filter" value="all">Tous</button> ';
echo '<button type="submit" name="filter" value="chat">Chats</button> ';
echo '<button type="submit" name="filter" value="chien">Chiens</button>';
echo '<button type="submit" name="filter" value="Poissons">Poissons</button>';
echo '</form>';


// Utiliser la méthode GET pour envoyer des paramètres dans l'URL
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';



// Filtrer les animaux selon le paramètre
$tableauFiltre = array_filter($tableauAnimaux, function($a) use ($filter) {
    if ($filter === 'all') {
        return true;
    }
    return isset($a['type']) && $a['type'] === $filter;
});

// Afficher les animaux filtrés
if (empty($tableauFiltre)) {
    echo '<p>Aucun animal trouvé.</p>';
} else {
    echo '<ul>';
    foreach ($tableauFiltre as $animal) {
        $nom = htmlspecialchars($animal['nom']);
        $age = (int) $animal['age'];
        $type = htmlspecialchars($animal['type']);
        echo "<li>{$nom} — {$age} ans — {$type}</li>";
    }
    echo '</ul>';
}
