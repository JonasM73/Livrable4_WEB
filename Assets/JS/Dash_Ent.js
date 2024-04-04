// Récupérer les données PHP assignées à Smarty
const secteursActiviteData = JSON.parse('<?php echo json_encode($secteurs_activite); ?>');
const LocaliteData = JSON.parse('<?php echo json_encode($localite); ?>');
const AnnoncesData = JSON.parse('<?php echo json_encode($annonces); ?>');

// Configuration du diagramme
const secteursActiviteChart = new Chart(document.getElementById('Chart_SEC').getContext('2d'), {
    type: 'bar',
    data: {
        labels: Object.keys(secteursActiviteData),
        datasets: [{
            label: 'Nombre d\'entreprises',
            data: Object.values(secteursActiviteData),
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Configuration du diagramme
const LocaliteChart = new Chart(document.getElementById('Chart_LOC').getContext('2d'), {
    type: 'bar',
    data: {
        labels: Object.keys(secteursActiviteData),
        datasets: [{
            label: 'Nombre d\'entreprises',
            data: Object.values(secteursActiviteData),
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Configuration du diagramme
const AnnoncesChart = new Chart(document.getElementById('Chart_ANN').getContext('2d'), {
    type: 'bar',
    data: {
        labels: Object.keys(secteursActiviteData),
        datasets: [{
            label: 'Offres',
            data: Object.values(secteursActiviteData),
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});