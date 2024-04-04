// Fonction pour transformer le contenu d'un champ textuel en majuscules
function MAJ(input) {
    input.value = input.value.toUpperCase();
}

// Fonction pour mettre la première lettre en majuscule
function firstMAJ(input) {
    let valeur = input.value;
    if (valeur === '' || valeur.length === 1) {
        input.value = valeur.charAt(0).toUpperCase() + valeur.slice(1);
    }
}

// Fonction pour vérifier si les mots de passe correspondent
function verifierMotsDePasse() {
    var motDePasseA = document.getElementById('password').value;
    var motDePasseB = document.getElementById('confirmpassword').value;
    var messageErreur = document.getElementById('confirmMDP');
    if (motDePasseA !== motDePasseB) {
        messageErreur.textContent = "Les mots de passe ne correspondent pas.";
    } else {
        messageErreur.textContent = "";
    }
}

// Fonction pour réinitialiser le formulaire
function resetForm() {
    document.getElementById("créer_compte").reset();
    document.getElementById('MotDePasse').textContent = "";
    document.getElementById('confirmMDP').textContent = "";
    document.getElementById('emailMessage').textContent = "";
}

// Fonction pour soumettre le formulaire de création de compte
function soumettreFormulaire(event) {
    event.preventDefault(); // Empêche l'envoi par défaut du formulaire
    // Simulation de la création du compte (remplacez cette ligne par votre logique de création de compte réelle)
    setTimeout(function() {
        document.getElementById("soumission").innerHTML = "Le compte a été créé avec succès!";
        setTimeout(function() {
            window.location.href = "Connexion.html"; // Rediriger vers la page de connexion après 2 secondes
        }, 2000); // Attendre 2 secondes avant la redirection
    }, 2000); // Attendre 2 secondes pour simuler la création du compte
}

// Ajouter un écouteur d'événement sur la soumission du formulaire
document.getElementById("créer_compte").addEventListener("submit", function(event) {
    // Vérifier si le bouton cliqué est celui de la création de compte
    if (event.submitter && event.submitter.name === 'créer_compte') {
        verifierMotsDePasse(); // Vérifier les mots de passe avant de soumettre le formulaire
        soumettreFormulaire(event); // Soumettre le formulaire de création de compte
    }
});

// Ajouter un écouteur d'événement pour réinitialiser le formulaire
document.getElementById("reset_button").addEventListener("click", resetForm);
