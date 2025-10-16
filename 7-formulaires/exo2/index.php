<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Les formulaires"; //Mettre le nom du titre de la page que vous voulez
?>


<!-- exercice1 Les formulaires -->
<?php

// Exercices 2

// 2- Traitez les données dans le même formulaire avec l’attribut action = ‘PHP_SELF’
echo "<p>Formulaire post qui traite les données sur la même page avec PHP_SELF</p>";
$nom = $prenom = $date_naissance = $email = $adresse = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom'] ?? ''), ENT_QUOTES);
    $prenom = htmlspecialchars(trim($_POST['prenom'] ?? ''), ENT_QUOTES);
    $date_naissance = htmlspecialchars(trim($_POST['date_naissance'] ?? ''), ENT_QUOTES);
    $email = htmlspecialchars(trim($_POST['email'] ?? ''), ENT_QUOTES);
    $adresse = htmlspecialchars(trim($_POST['adresse'] ?? ''), ENT_QUOTES);

    echo "<h2>Informations reçues :</h2>";
    echo "Nom : $nom<br>Prénom : $prenom<br>Date de naissance : $date_naissance<br>Email : $email<br>Adresse : $adresse<hr>";
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES); ?>">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" placeholder="Nom" required value="<?php echo $nom; ?>"><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" placeholder="Prénom" required value="<?php echo $prenom; ?>"><br>

    <label for="date_naissance">Date de naissance :</label>
    <input type="date" id="date_naissance" name="date_naissance" required value="<?php echo $date_naissance; ?>"><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" placeholder="Email" required value="<?php echo $email; ?>"><br>

    <label for="adresse">Adresse :</label>
    <input type="text" id="adresse" name="adresse" placeholder="Adresse" required value="<?php echo $adresse; ?>"><br>

    <input type="submit" name="submit" value="Envoyer">
</form>


<?php

/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
