<?php



$book1 = new Book("Un livre", "Une edition", "Auteur", "2020");
$book2 = new Book("Deux livres", "Deux edition", "Auteur", "2021");
$book3 = new Book("Trois livres", "Trois edition", "Auteur", "2022");
$book4 = new Book("Quatre livres", "Quatre edition", "Auteur", "2023");
$book5 = new Book("Cinq livres", "Cinq edition", "Auteur", "2024");
$book6 = new Book("Six livres", "Six edition", "Auteur", "2025");
$books = [$book1, $book2, $book3, $book4, $book5, $book6];


// Traitement du filtre
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $editionFilter = $_POST['edition'] ?? '';
    $dateFilter = $_POST['date'] ?? '';

    foreach ($books as $book) {
        $matchEdition = empty($editionFilter) || $book->getEdition() === $editionFilter;
        $matchDate = empty($dateFilter) || $book->getPublicationDate() === $dateFilter;

        if ($matchEdition && $matchDate) {
            $book->display();
        }
    }
} else {
    // Afficher tous les livres par défaut
    foreach ($books as $book) {
        $book->display();
    }
}