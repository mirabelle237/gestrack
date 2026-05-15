<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GesTrack | Historique</title>
    <style>
        :root { --vert: #1A3924; --orange: #FF944D; }
        body { margin: 0; display: flex; height: 100vh; font-family: 'Segoe UI', sans-serif; background: #F0F2F5; }
        .sidebar { width: 280px; background: var(--vert); color: white; display: flex; flex-direction: column; }
        .nav-links a { display: block; padding: 15px 30px; color: white; text-decoration: none; text-transform: uppercase; font-size: 0.9rem; }
        .nav-links a.active { background: var(--orange); }
        .main-content { flex-grow: 1; padding: 40px; }
        .history-card { background: white; border-radius: 15px; padding: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; color: #888; padding: 15px; border-bottom: 2px solid #eee; }
        td { padding: 15px; border-bottom: 1px solid #eee; }
        .type-in { color: #1e7e34; font-weight: bold; }
        .type-out { color: #d9534f; font-weight: bold; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="nav-links">
            <a href="presentation_magasinier.php">Accueil</a>
            <a href="entree_magasinier.php">Entrée de Stock</a>
            <a href="sortie_magasinier.php">Sortie de Stock</a>
            <a href="historique_magasinier.php" class="active">Historique</a>
        </div>
    </div>
    <div class="main-content">
        <h1 style="color: var(--vert);">Journal des Mouvements</h1>
        <div class="history-card">
            <table>
                <thead>
                    <tr><th>Date</th><th>Type</th><th>Produit</th><th>Quantité</th><th>Opérateur</th></tr>
                </thead>
                <tbody>
                    <tr><td>14/05/2026</td><td><span class="type-in">ENTRÉE</span></td><td>Farine de Maïs</td><td>+50</td><td>Mirabelle</td></tr>
                    <tr><td>14/05/2026</td><td><span class="type-out">SORTIE</span></td><td>Huile de Palme</td><td>-10</td><td>Mirabelle</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>