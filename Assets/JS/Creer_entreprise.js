function validate_num_add() {
    var num_add = document.getElementById('num_add').value;
    if (isNaN(num_add) || num_add === "") {
		document.getElementById('error_num').textContent=("Il faut entrer un nombre !")
    }
}

// Écouteurs d'événements d'entrée pour les champs de formulaire
document.addEventListener('DOMContentLoaded', function() {
	document.getElementById('num_address').addEventListener('input', function() {
        validate_num_add(this);
    });
});

function validatePostalCode(input, index) {
    const postalCodePattern = /^[0-9]{5}$/;
    const isValid = postalCodePattern.test(input.value);
    const errorSpan = document.getElementById('errorCP' + index);
    if (!isValid) {
        errorSpan.textContent = 'Le code postal doit contenir 5 chiffres';
		return false;
    } else {
        errorSpan.textContent = '';
		return true;
    }
}

function validateAddress(input, index) {
    const addressPattern = /^[a-zA-Z0-9\s,.'-]{3,}$/;
    const isValid = addressPattern.test(input.value);
    const errorSpan = document.getElementById('erroraddress' + index);
    if (!isValid) {
        errorSpan.textContent = 'Il faut rentrer une adresse valide';
		return false;
    } else {
        errorSpan.textContent = '';
		return true;
    }
}

function generateAddressFields(num) {
    var addressesDiv = document.getElementById("addresses");
    addressesDiv.innerHTML = ""; // Clear previous content
    if (num > 0){
        addressesDiv.innerHTML = "<br><div id='ADD'></div><br><br>";
        var addresses = document.getElementById("ADD");
    }
    for (var i = 1; i <= num; i++) {
        var fieldset = document.createElement("fieldset");
        fieldset.innerHTML = "<h2>Adresse " + i + "</h2>" +
            "<label>Code postal</label><br><br>" +
            "<input name='CP' placeholder='CP' id='CP" + i + "' oninput='fetchCities(" + i + "); validatePostalCode(this, " + i + ")' required><br>" +
            "<span id='errorCP" + i + "' class='error'></span><br><br>" +
            "<label>Ville</label><br>" +
            "<select name='ville' class='selecity' id='city" + i + "'></select><br>" +
            "<span id='error" + i + "' class='error'></span><br><br>" +
            "<label>Adresse</label><br><br>" +
            "<input type='text' id='address" + i + "' name='address' placeholder='Entrez votre adresse' oninput='validateAddress(this, " + i + ")' required><br>" +
            "<span id='erroraddress" + i + "' class='TextRed'></span>" +
            "<p class='connectext'>Exemple d'adresse : 123 Main Street</p>";
        addresses.appendChild(fieldset);
        // Ajout d'un saut de ligne entre chaque fieldset inséré
        if (i < num) {
            var lineBreak = document.createElement("br");
            addresses.appendChild(lineBreak);
            addresses.appendChild(lineBreak);
        }   
    }

    // Fonction pour vérifier si tous les champs sont valides
	function validateForm() {
		var isValid = true;
		for (var j = 1; j <= num; j++) {
			var cpInput = document.getElementById('CP' + j);
			var addressInput = document.getElementById('address' + j);
			if (!validatePostalCode(cpInput, j) || !validateAddress(addressInput, j)) {
				isValid = false;
			}
		}
		return isValid;
	}

    // Empêcher l'envoi du formulaire si un champ est invalide
    var form = document.getElementById('créer_entreprise');
    form.onsubmit = function() {
        return validateForm();
    };
}

function fetchCities(index) {
    // Récupération de la valeur dans le champ de saisie du code postal spécifique
    var cpInput = document.getElementById("CP" + index).value;
    // Récupération du menu déroulant des villes spécifique
    var citySelect = document.getElementById("city" + index);
    // Récupération de l'élément affichant une erreur spécifique
    var error = document.getElementById("error" + index);
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
            if (xhr.status == 200) {
                // Récupération des données de la ville
                var cities = JSON.parse(xhr.responseText);
                // Parcours des données des villes et construction des options HTML
                for (var i = 0; i < cities.length; i++) {
                    html += "<option value='" + cities[i].nomCommune + "'>" + cities[i].nomCommune + "</option>";
                }
                // Remplacement du contenu de l'élément avec l'ID "city" par la chaîne HTML construite
                citySelect.innerHTML = html;
            } else {
                // Si le statut de la réponse n'est pas 200, affichage d'un message d'erreur
                html = "Erreur lors de la récupération des utilisateurs.";
                error.textContent = html;
            }
        };
        // Envoi de la requête
        xhr.send();
    }
}

function resetForm() {
    document.getElementById("créer_entreprise").reset();
	var addressesDiv = document.getElementById("addresses");
    addressesDiv.innerHTML = "";
}