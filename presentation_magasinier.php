<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GesTrack | Magasinier</title>
    <style>
        :root { --vert: #1A3924; --orange: #FF944D; }
        body { margin: 0; display: flex; height: 100vh; font-family: 'Segoe UI', sans-serif; overflow: hidden; }
        
        .sidebar { width: 280px; background: var(--vert); color: white; display: flex; flex-direction: column; }
        .sidebar-logo { padding: 30px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar-logo img { width: 60px; }
        
        .nav-links { flex-grow: 1; padding: 20px 0; }
        .nav-links a { display: block; padding: 15px 30px; color: white; text-decoration: none; transition: 0.3s; font-size: 0.9rem; text-transform: uppercase; }
        .nav-links a:hover, .nav-links a.active { background: var(--orange); }

        .logout { padding: 20px; border-top: 1px solid rgba(255,255,255,0.1); color: var(--orange); text-decoration: none; font-weight: bold; text-align: center; }

        .content { flex-grow: 1; }
        .hero { 
            width: 100%; height: 100%; 
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1587293852726-70cdb56c2866?auto=format&fit=crop&w=1200&q=80');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; text-align: center;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-logo"><img src="logo.png"><p>GESTRACK</p></div>
        <div class="nav-links">
            <a href="presentation_magasinier.php" class="active">Accueil</a>
            <a href="entree_magasinier.php">Entrée de Stock</a>
            <a href="sortie_magasinier.php">Sortie de Stock</a>
            <a href="historique_magasinier.php">Historique</a>
            <a href="inventaire_magasinier.php">Inventaire</a>
        </div>
        <a href="index.php" class="logout">DECONNEXION</a>
    </div>

    <div class="content">
        <div class="hero">
            <h1 style="font-size: 3rem;">ESPACE OPÉRATIONNEL</h1>
            <div style="width: 80px; height: 4px; background: var(--orange); margin: 20px;"></div>
            <p style="max-width: 500px; font-size: 1.1rem;">Bienvenue sur votre interface de terrain. Enregistrez les mouvements de stock avec rigueur pour GesTrack Cameroun.</p>
        </div>
    </div>
</body>
</html>