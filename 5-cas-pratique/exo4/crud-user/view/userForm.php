<?php
require_once __DIR__ . "/../controller/userController.php";

$users=getUsers();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../styles/userForm.css" />
<title>Nouvel utilisateur</title>
</head>
<body>

<form id="userForm" action="../controller/userController.php" method="post">
  <h1>Formulaire Utilisateur</h1>
  <p>Veuillez remplir le formulaire pour ajouter un nouvel utilisateur :</p>

  <div class="c100">
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom" />
    <p id="errorMessageNom" class="hidden error-message ">Le nom est obligatoire !</p>
  </div>

  <div class="c100">
    <label for="prenom">Prénom :</label><br>
    <input type="text" id="prenom" name="prenom" />
    <p id="errorMessagePrenom" class="hidden error-message">Le prénom est obligatoire.</p>
  </div>

  <div class="c100">
    <label for="mail">Email :</label>
    <input type="email" id="mail" name="mail" />
    <p id="errorMessageEmail" class="hidden error-message">Le mail est obligatoire.</p>
  </div>

  <div class="c100">
    <label for="ddn">Date de naissance :</label>
    <input type="date" id="ddn" name="ddn" />
    <p id="errorMessageDdn" class="hidden error-message">Le mail est obligatoire.</p>
  </div>

  <div class="c100" aria-labelledby="genre-label">
    <label id="genre-label">Genre :</label><br/>
    <div>
      <input type="radio" id="male" name="gender" value="Homme"  />
      <label for="male">Garçon</label>
    </div>
    <div>
      <input type="radio" id="fille" name="gender" value="Femme" />
      <label for="fille">Fille</label>
    </div>
    <p id="genreError" class="hidden error-message">Veuillez sélectionner Garçon ou Fille.</p>
  </div>

  <div class="c100" id="submit">
    <input type="submit" name="saveUser" value="Envoyer" />
  </div>
</form>
<script src="../scripts/userFormValidation.js"></script>
</body>
</html>
