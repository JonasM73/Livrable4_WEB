document.addEventListener("DOMContentLoaded", function() {
    // Sélectionne toutes les cases à cocher dans les options
    var checkboxes = document.querySelectorAll('.option input[type="checkbox"]');
    
    // Pour chaque case à cocher, ajoute un écouteur d'événements pour le changement d'état
    checkboxes.forEach(function(checkbox, index) {
        checkbox.addEventListener('change', function(event) {
            // Empêche la propagation de l'événement pour éviter que le clic ne soit transmis aux conteneurs parents
            event.stopPropagation();

            // Trouve le sous-menu correspondant à cette case à cocher
            var submenu = this.parentNode.querySelector('.submenu');

            // Si la case à cocher est cochée
            if (this.checked) {
                // Affiche le sous-menu et met le titre en gras
                submenu.style.display = 'block';
                var label = this.parentNode.querySelector('label');
                label.style.fontWeight = 'bold';
            } else {
                // Masque le sous-menu et réinitialise le style du titre
                submenu.style.display = 'none';
                var label = this.parentNode.querySelector('label');
                label.style.fontWeight = 'normal';
            }
        });

        // Ouvre le premier sous-menu par défaut
        if (index === 0) {
            var firstSubmenu = checkbox.parentNode.querySelector('.submenu');
            firstSubmenu.style.display = 'block';
            var firstmenu = checkbox.parentNode.querySelector('label');
            firstmenu.style.fontWeight = 'bold';
        }
    });

    const textarea = document.getElementById('singleLineTextarea');
    if (textarea) {
        textarea.addEventListener('input', function() {
            const lines = this.value.split('\n');
            if (lines.length > 1) {
                this.value = lines.slice(0, 1).join('\n');
            }
        });
    }
});

function validation() {
    // Sélectionne toutes les cases à cocher dans les options
    var checkboxes = document.querySelectorAll('.option input[type="checkbox"]');
    checkboxes.forEach(function(checkbox, index) {
        // Masque tous les sous-menus
        var submenu = checkbox.parentNode.querySelector('.submenu');
        if (submenu) {
            submenu.style.display = 'none';
            // Réinitialise le style des étiquettes
            var label = checkbox.parentNode.querySelector('label');
            if (label) {
                label.style.fontWeight = 'normal';
            }

            // Ouvre le premier sous-menu
            if (index === 0) {
                submenu.style.display = 'block';
                if (label) {
                    label.style.fontWeight = 'bold';
                }
            }
        }
    });
}


function updateCate(radio) {
    if (radio.checked) {
        var cate = document.getElementById('Compétence');
        cate.value = radio.id;
        document.getElementById('catValue').textContent = "Catégorie sélectionnée : " + cate.value;
    }
}

function updateCate2(radio) {
    if (radio.checked) {
        var cate2 = document.getElementById('durée_stage');
        cate2.value = radio.id;
        document.getElementById('catValue').textContent = "durée_stage sélectionnée : " + cate2.value;
    }
}

function updateCate3(radio) {
    if (radio.checked) {
        var cate3 = document.getElementById('remuneration');
        cate3.value = radio.id;
        document.getElementById('catValue').textContent = "remuneration sélectionnée : " + cate3.value;
    }
}

function updateCate4(radio) {
    if (radio.checked) {
        var cate4 = document.getElementById('Promo');
        cate4.value = radio.id;
        document.getElementById('catValue').textContent = "Promo sélectionnée : " + cate4.value;
    }
}
