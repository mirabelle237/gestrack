<!--<div class="main-content">
    <div class="header-flex" style="display:flex; justify-content: space-between; align-items: center;">
        <h2>Dashboard Administrateur</h2>
        <div class="user-info">Admin | <a href="logout.php">Déconnexion</a></div>
    </div>

    <div class="stats-grid">
        <div class="card">
            <h4>Total Produits</h4>
            <h2 style="color: var(--vert-sapin);">1,248</h2>
        </div>
        <div class="card">
            <h4>Mouvements du jour</h4>
            <h2 style="color: var(--orange);">+45</h2>
        </div>
        <div class="card">
            <h4>Alertes Critiques</h4>
            <h2 style="color: #d9534f;">3</h2>
        </div>
    </div>

    <div class="card" style="margin-top: 30px;">
        <h3>Vue d'ensemble de l'inventaire</h3>
        <div style="height: 200px; background: #fafafa; border: 1px dashed #ccc; display: flex; align-items: center; justify-content: center;">
            [Graphique Linéaire de l'Inventaire]
        </div>
    </div>
</div>-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GesTrack | Dashboard Dynamique</title>
    <!-- Chargement de Chart.js pour les graphiques dynamiques -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --vert-sapin: #1A3924;
            --orange-clair: #FF944D;
            --gris-clair: #F0F2F5;
            --blanc: #FFFFFF;
        }

        body {
            margin: 0;
            display: flex;
            height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            background-color: var(--gris-clair);
        }

        /* SIDEBAR (Réutilisée) */
        .sidebar { width: 280px; background: var(--vert-sapin); color: white; display: flex; flex-direction: column; }
        .sidebar-logo { padding: 30px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar-logo img { width: 60px; }
        .nav-links { flex-grow: 1; padding: 20px 0; }
        .nav-links a { display: block; padding: 15px 30px; color: white; text-decoration: none; transition: 0.3s; font-size: 0.9rem; text-transform: uppercase; }
        .nav-links a:hover, .nav-links a.active { background: var(--orange-clair); }
        .logout { padding: 20px; border-top: 1px solid rgba(255,255,255,0.1); color: var(--orange-clair); text-decoration: none; font-weight: bold; text-align: center; }

        /* CONTENU PRINCIPAL */
        .main-content { flex-grow: 1; padding: 30px; overflow-y: auto; }
        .header-top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .user-info { font-weight: bold; color: var(--vert-sapin); }

        /* GRILLE DE STATISTIQUES (Les petites cartes en haut) */
        .stats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 30px; }
        .stat-card { background: var(--blanc); padding: 20px; border-radius: 15px; display: flex; align-items: center; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .stat-icon { width: 50px; height: 50px; border-radius: 12px; background: rgba(255, 148, 77, 0.1); display: flex; justify-content: center; align-items: center; margin-right: 15px; }
        .stat-icon span { font-size: 1.5rem; }
        .stat-data h3 { margin: 0; font-size: 0.85rem; color: #888; }
        .stat-data p { margin: 5px 0 0; font-size: 1.5rem; font-weight: bold; color: var(--vert-sapin); }

        /* ZONE DES GRAPHIQUES */
        .charts-container { display: grid; grid-template-columns: 2fr 1fr; gap: 20px; }
        .chart-box { background: var(--blanc); padding: 25px; border-radius: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .chart-title { font-weight: bold; margin-bottom: 20px; color: var(--vert-sapin); display: flex; justify-content: space-between; }

        .status-alert { color: #d9534f; font-size: 0.8rem; font-weight: bold; background: #fdf0f0; padding: 5px 10px; border-radius: 5px; }
    </style>
</head>
<body>

    <!-- Sidebar Menu -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="logo.png">
            <p style="font-weight: bold;">GESTRACK</p>
        </div>
        <div class="nav-links">
            <a href="presentation_admin.php">Accueil</a>
            <a href="dashboard_admin.php" class="active">Dashboard</a>
            <a href="inventaire_admin.php">Gestion Inventaires</a>
            <a href="magasiniers_admin.php">Gestion Magasiniers</a>
        </div>
        <a href="index.php" class="logout">DECONNEXION</a>
    </div>

    <!-- Contenu Principal -->
    <div class="main-content">
        <div class="header-top">
            <div>
                <h1 style="margin:0; color: var(--vert-sapin);">Dashboard</h1>
                <p style="color:#888; margin:5px 0 0;">Bonjour Mirabelle, voici l'état de GesTrack aujourd'hui.</p>
            </div>
            <div class="user-info">Administrateur</div>
        </div>

        <!-- Cartes Statistiques -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon" style="color: var(--orange-clair);">📦</div>
                <div class="stat-data"><h3>Total Articles</h3><p>4,865</p></div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="color: #4CAF50;">🚛</div>
                <div class="stat-data"><h3>Entrées du mois</h3><p>1,248</p></div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="color: #f0ad4e;">⚠️</div>
                <div class="stat-data"><h3>Alertes Seuil</h3><p style="color: #d9534f;">12</p></div>
            </div>
        </div>

        <!-- Graphiques -->
        <div class="charts-container">
            <!-- Graphique Courbe (Flux de stock) -->
            <div class="chart-box">
                <div class="chart-title">Aperçu des Flux Mensuels <span style="font-size: 0.8rem; color: #888;">Derniers 6 mois</span></div>
                <canvas id="lineChart" height="150"></canvas>
            </div>

            <!-- Graphique Circulaire (Catégories) -->
            <div class="chart-box">
                <div class="chart-title">Top Catégories</div>
                <canvas id="doughnutChart"></canvas>
                <div style="margin-top: 20px;">
                    <div class="status-alert">Attention : 3 articles en rupture</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Configuration du Graphique Linéaire (Courbes)
        const ctxLine = document.getElementById('lineChart').getContext('2d');
        new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin'],
                datasets: [{
                    label: 'Entrées',
                    data: [12000, 15000, 10000, 18000, 14000, 21000],
                    borderColor: '#FF944D',
                    backgroundColor: 'rgba(255, 148, 77, 0.1)',
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Sorties',
                    data: [8000, 11000, 9000, 13000, 10000, 16000],
                    borderColor: '#1A3924',
                    backgroundColor: 'transparent',
                    fill: false,
                    tension: 0.4
                }]
            },
            options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
        });

        // Configuration du Graphique Circulaire (Doughnut)
        const ctxDoughnut = document.getElementById('doughnutChart').getContext('2d');
        new Chart(ctxDoughnut, {
            type: 'doughnut',
            data: {
                labels: ['Céréales', 'Huiles', 'Légumes', 'Boissons'],
                datasets: [{
                    data: [35, 25, 20, 20],
                    backgroundColor: ['#FF944D', '#1A3924', '#4CAF50', '#f0ad4e'],
                    borderWidth: 0
                }]
            },
            options: { responsive: true, cutout: '70%', plugins: { legend: { position: 'bottom' } } }
        });
    </script>
</body>
</html>