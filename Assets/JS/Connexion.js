// Fonction pour mettre à jour le message de validation en fonction du contenu du champ de saisie
function validateEmail() {
    const emailInput = document.getElementById('email');
    const emailMessage = document.getElementById('emailMessage');
    // Vérifier si l'e-mail est valide
    const emailPattern = /^[^\s@]+@([^\s@]+\.)+[a-zA-Z]{2,}$/;
    if (emailPattern.test(emailInput.value)) {
        const parts = emailInput.value.split('@');
        const domaine = parts[1].split('.');
        const boiteMail = domaine[0];
        const extension = domaine[1];
        // Vérifier si le nom de la boîte mail existe bien
        const boitesMailsConnu = ['outlook', 'gmail', 'hotmail', 'yahoo', 'icloud', 'viacesi', 'exemple'];
        const isValidBoiteMail = boitesMailsConnu.includes(boiteMail.toLowerCase());
        // Vérifier si les deux derniers caractères existent
        const isValidExtension = extension.length >= 2;
        if (isValidBoiteMail && isValidExtension) {
            emailMessage.textContent = '';
        } else {
            emailMessage.textContent = 'Adresse e-mail invalide';
        }
    } else {
        emailMessage.textContent = 'Adresse e-mail invalide';
    }
}

// Fonction pour vérifier si un mot de passe satisfait les critères
function validatePassword() {
    const passwordInput = document.getElementById('password');
    const passwordMessage = document.getElementById('MotDePasse');
    // Expression régulière pour vérifier si le mot de passe contient au moins une majuscule, un chiffre et un caractère spécial, et a une longueur d'au moins huit caractères
    const passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (passwordPattern.test(passwordInput.value)) {
        passwordMessage.textContent = '';
    } else {
        passwordMessage.textContent = 'Format du mot de passe invalide';
    }
}

// Fonction pour valider à la fois l'e-mail et le mot de passe
function validateForm(event) {
    // Empêcher l'envoi du formulaire par défaut
    event.preventDefault();
    // Valider l'e-mail
    validateEmail();
    // Valider le mot de passe
    validatePassword();
    // Récupérer les messages d'erreur
    const emailMessage = document.getElementById('emailMessage').textContent;
    const passwordMessage = document.getElementById('MotDePasse').textContent;
    // Vérifier si les deux champs sont valides avant d'envoyer la requête
    if (emailMessage === '' && passwordMessage === '') {
        // Les champs sont valides, vous pouvez envoyer la requête
        document.getElementById('connexion').submit();
    } else {
        // Les champs ne sont pas valides, affichez un message d'erreur
		const forminput = document.getElementById('soumission');
		forminput.textContent = "Veuillez remplir les champs correctement.";
    }
}

// Ajouter un écouteur d'événement de saisie pour détecter les changements dans le champ de saisie du mot de passe
document.getElementById('password').addEventListener('input', validatePassword);

// Ajouter un écouteur d'événement de saisie pour détecter les changements dans le champ de saisie
document.getElementById('email').addEventListener('input', validateEmail);

// Ajouter un écouteur d'événement pour détecter la soumission du formulaire
document.getElementById('connexion').addEventListener('submit', validateForm);