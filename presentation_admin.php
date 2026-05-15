<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GesTrack | Accueil Admin</title>
    <style>
        :root { --vert: #1A3924; --orange: #FF944D; }
        body { margin: 0; display: flex; height: 100vh; font-family: 'Segoe UI', sans-serif; }
        
        /* Side Bar Professionnelle */
        .sidebar { width: 280px; background: var(--vert); color: white; display: flex; flex-direction: column; }
        .sidebar-logo { padding: 30px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar-logo img { width: 70px; }
        
        .nav-links { flex-grow: 1; padding: 20px 0; }
        .nav-links a { display: block; padding: 15px 30px; color: white; text-decoration: none; transition: 0.3s; font-size: 0.9rem; text-transform: uppercase; }
        .nav-links a:hover { background: var(--orange); padding-left: 40px; }
        .nav-links a.active { border-left: 5px solid var(--orange); background: rgba(255,255,255,0.05); }

        .logout { padding: 20px; border-top: 1px solid rgba(255,255,255,0.1); color: var(--orange); text-decoration: none; font-weight: bold; text-align: center; }

        /* Contenu avec Image */
        .content { flex-grow: 1; position: relative; }
        .hero-img { 
            width: 100%; height: 100%; 
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1200&q=80');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; text-align: center;
        }
        h1 { font-size: 3.5rem; margin-bottom: 10px; }
        .line { width: 100px; height: 4px; background: var(--orange); margin-bottom: 20px; }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="logo.png">
            <p style="letter-spacing: 2px; font-weight: bold;">GESTRACK</p>
        </div>
        <div class="nav-links">
            <a href="presentation_admin.php" class="active">Accueil</a>
            <a href="dashboard_admin.php">Dashboard</a>
            <a href="inventaire_admin.php">Gestion Inventaires</a>
            <a href="magasiniers_admin.php">Gestion Magasiniers</a>
        </div>
        <a href="index.php" class="logout">DECONNEXION</a>
    </div>

    <div class="content">
        <div class="hero-img">
            <h1>BIENVENUE ADMIN</h1>
            <div class="line"></div>
            <p style="max-width: 600px; font-size: 1.2rem; opacity: 0.9;">
                Vous êtes sur l'interface de contrôle stratégique de GesTrack. 
                Supervisez les stocks nationaux et gérez vos équipes avec efficacité.
            </p>
        </div>
    </div>

</body>
</html>