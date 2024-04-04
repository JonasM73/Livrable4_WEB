document.addEventListener('DOMContentLoaded', function() {
    const inputNombreCompetences = document.getElementById('num_competences');
    const champCompetences = document.getElementById('champs_competences');
    const competencesError = document.getElementById('competences_error');

    inputNombreCompetences.addEventListener('input', function() {
        competencesError.textContent = ''; // Efface le message d'erreur précédent
        const nombreCompetences = parseInt(this.value);

        if (nombreCompetences > 3) {
            competencesError.textContent = 'Le nombre de compétences ne doit pas dépasser 3';
            return;
        }

        champCompetences.innerHTML = ''; // Réinitialise les champs de compétences à chaque changement

        for (let i = 1; i <= nombreCompetences; i++) {
            const inputCompetence = document.createElement('input');
            inputCompetence.type = 'text';
            inputCompetence.placeholder = 'Compétence ' + i;
            inputCompetence.name = 'competence_' + i; // Donnez un nom unique à chaque champ de compétence
            champCompetences.appendChild(inputCompetence);
            champCompetences.appendChild(document.createElement('br')); // Ajoute un saut de ligne entre chaque champ
        }
    });

    const inputNombrePromotions = document.getElementById('num_promotions');
    const champPromotions = document.getElementById('champs_promotions');
    const promotionsError = document.getElementById('promotions_error');

    inputNombrePromotions.addEventListener('input', function() {
        promotionsError.textContent = ''; // Efface le message d'erreur précédent
        const nombrePromotions = parseInt(this.value);

        if (nombrePromotions > 3) {
            promotionsError.textContent = 'Le nombre de promotions ne doit pas dépasser 3';
            return;
        }

        champPromotions.innerHTML = ''; // Réinitialise les champs de promotions à chaque changement

        for (let i = 1; i <= nombrePromotions; i++) {
            const inputPromotion = document.createElement('input');
            inputPromotion.type = 'text';
            inputPromotion.placeholder = 'Promotion ' + i;
            inputPromotion.name = 'promotion_' + i; // Donnez un nom unique à chaque champ de promotion
            champPromotions.appendChild(inputPromotion);
            champPromotions.appendChild(document.createElement('br')); // Ajoute un saut de ligne entre chaque champ
        }
    });
});