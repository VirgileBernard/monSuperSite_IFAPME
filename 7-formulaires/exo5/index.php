<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Les formulaires"; //Mettre le nom du titre de la page que vous voulez
?>


<!-- exercice1 Les formulaires -->
<?php

// Exercices 5
echo "<h2>Exercice 5</h2>";
// Créer un formulaire demandant la saisie d’un prix HT et d’un taux de TVA. Le script affiche le montant de la TVA et le prix TTC dans deux zones de texte créées dynamiquement. Le formulaire maintient les données saisies.


if (isset($_POST["submit"])) {
    // Récupération et sécurisation des données
    $prixHT = floatval($_POST["prixHT"]);
    $tauxTVA = floatval($_POST["tauxTVA"]);

    // Calculs
    $montantTVA = $prixHT * ($tauxTVA / 100);
    $prixTTC = $prixHT + $montantTVA;
} else {
    // Valeurs par défaut si le formulaire n'a pas encore été soumis
    $prixHT = '';
    $tauxTVA = '';
    $montantTVA = '';
    $prixTTC = '';
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES); ?>">
    <label for="prixHT">Prix HT :</label>
    <input type="text" id="prixHT" name="prixHT" placeholder="Prix HT" required value="<?php echo htmlspecialchars($prixHT); ?>"><br>

    <label for="tauxTVA">Taux de TVA (%) :</label>
    <input type="text" id="tauxTVA" name="tauxTVA" placeholder="Taux de TVA" required value="<?php echo htmlspecialchars($tauxTVA); ?>"><br>

    <input type="submit" name="submit" value="Calculer">
</form>

<?php if (isset($_POST["submit"])): ?>
    <div class="result">
        <label>Montant de la TVA :</label>
        <input type="text" value="<?php echo number_format($montantTVA, 2, ',', ' '); ?> €" readonly><br>

        <label>Prix TTC :</label>
        <input type="text" value="<?php echo number_format($prixTTC, 2, ',', ' '); ?> €" readonly><br>
    </div>
<?php endif; 




/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
