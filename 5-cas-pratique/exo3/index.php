<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Formulaire"; //Mettre le nom du titre de la page que vous voulez
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire moderne</title>
        <link rel="stylesheet" href="formulaireModerne.css">
    </head>
    <body>

        <h1>Formulaire de validation</h1>
            <button id="toogleModeBtn">Light mode</button>
    <form id="myValidatedForm" action="process.php" method="post">
        
    

            <div class="c100">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" class="input-valid" placeholder="Votre prénom">
                <p id="errorMessagePrenom" class="hidden">Le prénom est obligatoire.</p>
            </div>

            <div class="c100">
                <label for="mail">Email :</label>
                <input type="text" id="mail" name="mail" class="input-valid" placeholder="Votre email">
                <p id="errorMessageEmail" class="hidden">Le mail est obligatoire.</p>
            </div>

            <div class="c100">
                <label for="age">Âge :</label>
                <input type="number" name="age" id="age" class="input-valid" placeholder="Votre âge">
                <p id="errorMessageAge" class="hidden">L'âge doit être un nombre entre 10 et 99.</p>
            </div>

            <div class="c100" id="submit">
                <input type="submit" name="submit" value="Envoyer">
            </div>
        </form>

        <script src="validation.js">

        </script>
    </body>
</html>
<?php
        if (isset($_POST["submit"])) {
            $prenom = trim($_POST["prenom"] ?? '');
            $mail   = trim($_POST["mail"] ?? '');
            $age    = trim($_POST["age"] ?? '');

            $prenom_safe = htmlspecialchars($prenom);
            $mail_safe   = htmlspecialchars($mail);
            $age_safe    = htmlspecialchars($age);
             // validation du coté serveur
            $errors = [];

           /*if ($prenom === '') {
                $errors[] = "Le prénom est requis.";
            }
            if ($mail === '' || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email invalide.";
            }
            if ($age === '' || !is_numeric($age) || $age < 12 || $age > 99) {
                $errors[] = "L'âge doit être un nombre entre 12 et 99.";
            }
             if (empty($errors)) {
                echo <<<HTML
                <section class="result success">
                    <div class="result-header">
                        <span class="icon"></span>
                        <h2>Envoi réussi</h2>
                    </div>
                    <div class="card">
                        <div class="row"><span class="label">Prénom</span><span class="value">{$prenom_safe}</span></div>
                        <div class="row"><span class="label">Email</span><span class="value">{$mail_safe}</span></div>
                        <div class="row"><span class="label">Âge</span><span class="value">{$age_safe} ans</span></div>
                    </div>
                </section>
                HTML;
            } 
            else { //  to handle errors
                echo <<<HTML
                <section class="result error">
                    <div class="result-header">
                        <span class="icon"></span>
                        <h2>Erreur de validation</h2>
                    </div>
                    <div class="card">
                        <ul>
                HTML;
                foreach ($errors as $error) {
                    echo "<li>{$error}</li>";
                }
                echo <<<HTML
                        </ul>
                    </div>
                </section>
                HTML;
            } */
        }
        ?> 



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>