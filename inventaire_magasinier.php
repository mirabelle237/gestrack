<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GesTrack | Consultation Stock</title>
    <style>
        :root { --vert: #1A3924; --orange: #FF944D; --fond: #F0F2F5; }
        body { margin: 0; display: flex; height: 100vh; font-family: 'Segoe UI', sans-serif; background: var(--fond); }
        .sidebar { width: 280px; background: var(--vert); color: white; display: flex; flex-direction: column; }
        .sidebar-logo { padding: 30px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .nav-links a { display: block; padding: 15px 30px; color: white; text-decoration: none; text-transform: uppercase; font-size: 0.9rem; }
        .nav-links a.active { background: var(--orange); }
        .main-content { flex-grow: 1; padding: 40px; }
        .table-card { background: white; border-radius: 15px; padding: 25px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; color: #888; padding: 15px; border-bottom: 2px solid var(--fond); }
        td { padding: 15px; border-bottom: 1px solid var(--fond); color: var(--vert); }
        .badge { padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; }
        .badge-low { background: #fdf0f0; color: #d9534f; } /* Alerte seuil minimal */
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-logo"><img src="logo.png" width="60"><p>GESTRACK</p></div>
        <div class="nav-links">
            <a href="presentation_magasinier.php">Accueil</a>
            <a href="entree_magasinier.php">Entrée de Stock</a>
            <a href="sortie_magasinier.php">Sortie de Stock</a>
            <a href="historique_magasinier.php">Historique</a>
            <a href="inventaire_magasinier.php" class="active">Inventaire</a>
        </div>
        <a href="logout.php" style="padding: 20px; color: var(--orange); text-decoration: none; text-align: center; font-weight: bold;">DÉCONNEXION</a>
    </div>
    <div class="main-content">
        <h1 style="color: var(--vert);">État Global des Stocks</h1>
        <div class="table-card">
            <table>
                <thead>
                    <tr><th>Désignation</th><th>Catégorie</th><th>En Réserve</th><th>Statut</th></tr>
                </thead>
                <tbody>
                    <tr><td>Farine de Maïs</td><td>Céréales</td><td>450 kg</td><td><span class="badge" style="background:#e6f4ea; color:#1e7e34;">Optimal</span></td></tr>
                    <tr><td>Huile de Palme</td><td>Oléagineux</td><td>85 L</td><td><span class="badge badge-low">Alerte Seuil</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>