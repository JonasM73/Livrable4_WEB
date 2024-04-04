document.getElementById('CV').addEventListener('change', function() {
  var fileName = this.value.split('\\').pop();
  var label = document.getElementById('fileLabel');
  if (fileName) {
    label.innerHTML = fileName;
  } else {
    label.innerHTML = 'Choisir un fichier';
  }
});

var scrollToTopButton = document.getElementById('scrollToTop');

// Fonction pour afficher ou masquer le bouton en fonction du défilement de la page
function toggleScrollToTopButton() {
    if (window.scrollY > 300) { // Afficher le bouton lorsque l'utilisateur descend de 300 pixels
        scrollToTopButton.style.display = 'block';
    } else {
        scrollToTopButton.style.display = 'none';
    }
}

// Ajouter un écouteur d'événement pour le défilement de la page
window.addEventListener('scroll', toggleScrollToTopButton);

// Fonction pour faire défiler vers le haut de la page lorsque le bouton est cliqué
scrollToTopButton.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});