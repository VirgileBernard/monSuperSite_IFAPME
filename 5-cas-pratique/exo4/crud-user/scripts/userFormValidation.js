document.getElementById('userForm').addEventListener('submit', function(event) {
    let isValid = true;

    // --- Récupération des éléments  ---
    // --- Nouveaux éléments à valider (même pattern) ---
    const nomInput = document.getElementById('nom');
    const errorMessageNom = document.getElementById('errorMessageNom');

    const prenomInput = document.getElementById('prenom');
    const errorMessagePrenom = document.getElementById('errorMessagePrenom');

    const emailInput = document.getElementById('mail');
    const errorMessageEmail = document.getElementById('errorMessageEmail');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    

    const ddnInput = document.getElementById('ddn');
    const errorMessageDdn = document.getElementById('errorMessageDdn');

    const genreChecked = document.querySelector('input[name="gender"]:checked');
    const errorMessageGenre = document.getElementById('genreError');

    // --- Validation du Nom ---
    if (nomInput.value.trim() === '') {
        isValid = false;
        nomInput.classList.add('input-error');
        nomInput.classList.remove('input-valid');
        errorMessageNom.textContent = "Le nom est obligatoire";
        errorMessageNom.classList.remove('hidden');
    } else {
        nomInput.classList.remove('input-error');
        nomInput.classList.add('input-valid');
        errorMessageNom.classList.add('hidden');
    }

    // --- Validation du Prénom ---
    if (prenomInput.value.trim() === '') {
        isValid = false;
        prenomInput.classList.add('input-error');
        prenomInput.classList.remove('input-valid');
        errorMessagePrenom.textContent = "Le prénom est obligatoire.";
        errorMessagePrenom.classList.remove('hidden');
    } else {
        prenomInput.classList.remove('input-error');
        prenomInput.classList.add('input-valid');
        errorMessagePrenom.classList.add('hidden');
    }

    // --- Validation de l'Email ---
    if (emailInput.value.trim() === '' || !emailRegex.test(emailInput.value.trim())) {
        isValid = false;
        emailInput.classList.add('input-error');
        emailInput.classList.remove('input-valid');
        errorMessageEmail.textContent = "Veuillez entrer un email valide.";
        errorMessageEmail.classList.remove('hidden');
    } else {
        emailInput.classList.remove('input-error');
        emailInput.classList.add('input-valid');
        errorMessageEmail.classList.add('hidden');
    }

    // --- Validation de la Date de naissance (non vide + pas future) ---
    if (ddnInput.value.trim() === '') {
        isValid = false;
        ddnInput.classList.add('input-error');
        ddnInput.classList.remove('input-valid');
        errorMessageDdn.textContent = "La date de naissance est obligatoire.";
        errorMessageDdn.classList.remove('hidden');
    } else {
        const enteredDate = new Date(ddnInput.value);
        const today = new Date();
        if (isNaN(enteredDate.getTime()) || enteredDate > today) {
            isValid = false;
            ddnInput.classList.add('input-error');
            ddnInput.classList.remove('input-valid');
            // Si tu ajoutes un <p id="errorMessageDdn"> :
            // errorMessageDdn.textContent = "Date de naissance invalide.";
            // errorMessageDdn.classList.remove('hidden');
        } else {
            ddnInput.classList.remove('input-error');
            ddnInput.classList.add('input-valid');
            // Si tu ajoutes un <p id="errorMessageDdn"> :
            // errorMessageDdn.classList.add('hidden');
        }
    }

    // --- Validation du Genre (radio) ---
    if (!genreChecked) {
        isValid = false;
        // pas de classe à mettre sur les radios, on affiche juste le message
        errorMessageGenre.textContent = "Veuillez sélectionner Garçon ou Fille.";
        errorMessageGenre.classList.remove('hidden');
    } else {
        errorMessageGenre.classList.add('hidden');
    }

    // --- Empêche l'envoi si le formulaire n'est pas valide ---
    if (!isValid) {
        event.preventDefault();
    }
});
