<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GesTrack | Inventaire Global</title>
    <style>
        :root { --vert: #1A3924; --orange: #FF944D; --fond: #F0F2F5; --blanc: #FFFFFF; }
        body { margin: 0; display: flex; height: 100vh; font-family: 'Segoe UI', sans-serif; background: var(--fond); }
        
        /* SIDEBAR */
        .sidebar { width: 280px; background: var(--vert); color: white; display: flex; flex-direction: column; }
        .sidebar-logo { padding: 30px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar-logo img { width: 60px; }
        .nav-links { flex-grow: 1; padding: 20px 0; }
        .nav-links a { display: block; padding: 15px 30px; color: white; text-decoration: none; transition: 0.3s; font-size: 0.9rem; text-transform: uppercase; }
        .nav-links a:hover, .nav-links a.active { background: var(--orange); }
        .logout { padding: 20px; border-top: 1px solid rgba(255,255,255,0.1); color: var(--orange); text-decoration: none; font-weight: bold; text-align: center; }

        /* CONTENU */
        .main-content { flex-grow: 1; padding: 30px; overflow-y: auto; }
        .header-action { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; }
        
        /* TABLEAU STYLE PROFESSIONNEL */
        .table-container { background: var(--blanc); padding: 20px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; padding: 15px; border-bottom: 2px solid var(--fond); color: #888; font-size: 0.85rem; text-transform: uppercase; }
        td { padding: 15px; border-bottom: 1px solid var(--fond); color: var(--vert); font-weight: 500; }
        
        .status-pill { padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; }
        .status-ok { background: #e6f4ea; color: #1e7e34; }
        .status-alert { background: #fdf0f0; color: #d9534f; }

        .btn-add { background: var(--orange); color: white; padding: 12px 25px; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; transition: 0.3s; }
        .btn-add:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(255, 148, 77, 0.3); }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-logo"><img src="logo.png"><p style="font-weight: bold;">GESTRACK</p></div>
        <div class="nav-links">
            <a href="presentation_admin.php">Accueil</a>
            <a href="dashboard_admin.php">Dashboard</a>
            <a href="inventaire_admin.php" class="active">Gestion Inventaires</a>
            <a href="magasiniers_admin.php">Gestion Magasiniers</a>
        </div>
        <a href="index.php" class="logout">DECONNEXION</a>
    </div>

    <div class="main-content">
        <div class="header-action">
            <h1 style="color: var(--vert);">Inventaire des Stocks</h1>
            <button class="btn-add"><a href="entree_magasinier.php">+ Ajouter un nouveau produit</a></button>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Catégorie</th>
                        <th>Quantité</th>
                        <th>Seuil Min</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Farine de Maïs (25kg)</td>
                        <td>Céréales</td>
                        <td>450</td>
                        <td>100</td>
                        <td><span class="status-pill status-ok">En Stock</span></td>
                        <td><button style="border:none; background:none; cursor:pointer;">✏️</button></td>
                    </tr>
                    <tr>
                        <td>Huile de Palme (1L)</td>
                        <td>Oléagineux</td>
                        <td>85</td>
                        <td>100</td>
                        <td><span class="status-pill status-alert">Alerte Seuil</span></td>
                        <td><button style="border:none; background:none; cursor:pointer;">✏️</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>