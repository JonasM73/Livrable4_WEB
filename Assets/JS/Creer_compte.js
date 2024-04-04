// Fonction permettant de transformer le contenu d'un champ textuelle en majuscules
function MAJ(input) {
    input.value = input.value.toUpperCase();
}

// Définition de la fonction pour transformer le premier caractère en majuscule
function firstMAJ(input) {
    // Récupérer le contenu du champ de saisie
    let valeur = input.value;
    // Vérifier si le champ de saisie est vide ou s'il n'y a qu'un seul caractère
    if (valeur === '' || valeur.length === 1) {
        // Si oui, convertir le premier caractère en majuscule
        input.value = valeur.charAt(0).toUpperCase() + valeur.slice(1);
    }
}

function verifierMotsDePasse() {
    // Récupérer les valeurs des champs de saisie
    var motDePasseA = document.getElementById('password').value;
    var motDePasseB = document.getElementById('confirmpassword').value;
    // Sélectionner l'élément pour afficher le message d'erreur
    var messageErreur = document.getElementById('confirmMDP');
    // Vérifier si les mots de passe sont différents
    if (motDePasseA !== motDePasseB) {
        // Afficher le message d'erreur
        messageErreur.textContent = "Les mots de passe ne correspondent pas.";
    } else {
        // Effacer le message d'erreur s'ils sont identiques
        messageErreur.textContent = "";
    }
}

document.getElementById("créer_compte").addEventListener("submit", function(event) {
    // Récupérer les valeurs des champs de saisie
    var motDePasseA = document.getElementById('password').value;
    var motDePasseB = document.getElementById('confirmpassword').value;
    // Vérifier si les mots de passe sont différents
    if (motDePasseA !== motDePasseB) {
        // Annuler l'envoi du formulaire
        event.preventDefault();
    }
});

function resetForm() {
    document.getElementById("créer_compte").reset();
    document.getElementById('MotDePasse').textContent = "";
    document.getElementById('confirmMDP').textContent = "";
    document.getElementById('emailMessage').textContent = "";
}

function soumettreFormulaire(event) {
    event.preventDefault(); // Empêche l'envoi par défaut du formulaire
    // Simulation de la création du compte (remplacez cette ligne par votre logique de création de compte réelle)
    setTimeout(function() {
        document.getElementById("soumission").innerHTML = "Le compte a été créé avec succès!";
        setTimeout(function() {
            window.location.href = "Connexion.html"; // Rediriger vers la page de login après 2 secondes
        }, 2000); // Attendre 2 secondes avant la redirection
    }, 2000); // Attendre 2 secondes pour simuler la création du compte
}

document.getElementById("créer_compte").addEventListener("submit", soumettreFormulaire);