<?php

require 'books.class.php';
require 'books.process.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <label>Édition :</label>
    <input type="text" name="edition">
    <label>Date de parution :</label>
    <input type="text" name="date">
    <button type="submit">Filtrer</button>
</form>

</body>
</html>