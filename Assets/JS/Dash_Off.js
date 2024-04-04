// Récupérer les données PHP assignées à Smarty
const CompetencesData = JSON.parse('<?php echo json_encode($competences); ?>');
const LocaliteData = JSON.parse('<?php echo json_encode($localite); ?>');
const PromoData = JSON.parse('<?php echo json_encode($promo); ?>');
const DureeData = JSON.parse('<?php echo json_encode($duree); ?>');
const TopData = JSON.parse('<?php echo json_encode($TOP); ?>');

// Configuration du diagramme
const CompétencesChart = new Chart(document.getElementById('Chart_COM').getContext('2d'), {
    type: 'bar',
    data: {
        labels: Object.keys(secteursActiviteData),
        datasets: [{
            label: 'Compétences',
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
            label: 'Villes',
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
const PromoChart = new Chart(document.getElementById('Chart_PRO').getContext('2d'), {
    type: 'bar',
    data: {
        labels: Object.keys(secteursActiviteData),
        datasets: [{
            label: 'Villes',
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
const DureeChart = new Chart(document.getElementById('Chart_DUR').getContext('2d'), {
    type: 'bar',
    data: {
        labels: Object.keys(secteursActiviteData),
        datasets: [{
            label: 'Durées des offres',
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
const WishlistChart = new Chart(document.getElementById('Chart_WIS').getContext('2d'), {
    type: 'bar',
    data: {
        labels: Object.keys(secteursActiviteData),
        datasets: [{
            label: 'Durées des offres',
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