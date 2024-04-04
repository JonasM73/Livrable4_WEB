// Fonction de validation du code postal
function validatePostalCode(input) {
    const postalCodePattern = /^\d{5}$/;
    const isValid = postalCodePattern.test(input.value);
    const errorSpan = document.getElementById('errorCP');
    if (!isValid) {
        errorSpan.textContent = 'Le code postal doit contenir 5 chiffres.';
    } else {
        errorSpan.textContent = '';
    }
}

// Fonction de validation du numéro de téléphone
function validatePhoneNumber(input) {
    const phoneNumberPattern = /^\d{10}$/;
    const isValid = phoneNumberPattern.test(input.value);
    const errorSpan = document.getElementById('errorNum');
    if (!isValid) {
        errorSpan.textContent = 'Le numéro de téléphone doit contenir 10 chiffres.';
    } else {
        errorSpan.textContent = '';
    }
}

// Fonction de validation du numéro de TVA
function validateVATNumber(input) {
    const vatNumberPattern = /^FR\d{11}$/; // Expression régulière pour FR suivi de 11 chiffres
    const isValid = vatNumberPattern.test(input.value);
    const errorSpan = document.getElementById('errorTVA');
    if (!isValid) {
        errorSpan.textContent = 'Le numéro de TVA doit commencer par FR suivi de 11 chiffres.';
    } else {
        errorSpan.textContent = '';
    }
}

// Écouteurs d'événements d'entrée pour les champs de formulaire
document.addEventListener('DOMContentLoaded', function() {
	document.getElementById('CP').addEventListener('input', function() {
        validatePostalCode(this);
    });
    document.getElementById('num').addEventListener('input', function() {
        validatePhoneNumber(this);
    });
    document.getElementById('TVA').addEventListener('input', function() {
        validateVATNumber(this);
    });
});

// Fonction pour afficher le message
function showMessage(message){
    var messageContainer = document.getElementById('message-container');
    messageContainer.innerHTML = '<p>' + message + '</p>';
}

function fetchCities() {
    // Récupération de la valeur dans le champ de saisie du code postal
    var cpInput = document.getElementById("CP").value;
    // Récupération du menu déroulant des villes
    var citySelect = document.getElementById("city");
	// Récupération de l'élément affichant une erreur
	var error = document.getElementById("error");
    // Efface les options précédentes dans la liste déroulante des villes s'il y en a
    citySelect.innerHTML = "";
	error.innerHTML = "";
    // Création d'une nouvelle requête XMLHttpRequest
    var xhr = new XMLHttpRequest();
    // Si la longueur du code postal est correcte
    if (cpInput.length === 5) {
        // Ouverture d'une requête GET vers l'API en utilisant le code postal saisi
        xhr.open("GET", "https://apicarto.ign.fr/api/codes-postaux/communes/" + cpInput, true);
        // Définition de la fonction de rappel pour gérer la réponse de la requête
        xhr.onload = function() {
            var html = ""; // Initialisation de la chaîne HTML
            // Vérification du statut de la réponse
            if (xhr.status == 200){
                // Récupération des données de la ville
                var cities = JSON.parse(xhr.responseText);
                // Parcours des données des villes et construction des options HTML
                for (var i = 0; i < cities.length; i++) {
                    html += "<option value='" + cities[i].nomCommune + "'>" + cities[i].nomCommune + "</option>";
                }
				// Remplacement du contenu de l'élément avec l'ID "city" par la chaîne HTML construite
				citySelect.innerHTML = html;
            }
            else {
                // Si le statut de la réponse n'est pas 200, affichage d'un message d'erreur
                html = "Erreur lors de la récupération des utilisateurs.";
				error.textContent = html;
            }
        };
        // Envoi de la requête
        xhr.send();
    }
}