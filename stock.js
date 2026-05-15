// Contrôle de saisie rigoureux pour les mouvements
function validerMouvement(quantiteDemandee, stockDisponible) {
    if (quantiteDemandee <= 0) {
        alert("La quantité doit être supérieure à 0.");
        return false;
    }
    if (quantiteDemandee > stockDisponible) {
        alert("Action impossible : Stock insuffisant (" + stockDisponible + " disponible).");
        return false;
    }
    return true;
}

// Simulation de mise à jour temps réel via AJAX
function refreshHistorique() {
    fetch('get_history.php')
        .then(response => response.text())
        .then(html => {
            document.getElementById('historiqueTempsReel').innerHTML = html;
        });
}

// Rafraîchir toutes les 30 secondes pour le "Temps Réel"
setInterval(refreshHistorique, 30000);