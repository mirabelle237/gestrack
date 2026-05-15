<!--<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GesTrack - Administration</title>
    <style>
        :root { --vert-sapin: #2d5a27; --orange: #f78132; --fond: #f1efea; }
        body { margin: 0; font-family: Arial, sans-serif; display: flex; background: var(--fond); }
        
        .sidebar { width: 250px; height: 100vh; background: var(--vert-sapin); color: white; position: fixed; padding: 20px; box-sizing: border-box; }
        .sidebar h2 { border-bottom: 2px solid var(--orange); padding-bottom: 10px; font-style: italic; }
        
        .menu { list-style: none; padding: 0; margin-top: 30px; }
        .menu li { padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); cursor: pointer; }
        .menu li:hover { color: var(--orange); }
        
        .main { margin-left: 250px; padding: 40px; width: 100%; }
        .card-container { display: flex; gap: 20px; margin-top: 20px; }
        .card { background: white; padding: 20px; flex: 1; border-top: 4px solid var(--orange); box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        
        .logout { color: var(--orange); text-decoration: none; font-weight: bold; display: block; margin-top: 50px; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>GesTrack</h2>
        <p>Espace Admin</p>
        <ul class="menu">
            <li>Tableau de bord</li>
            <li>Gestion des utilisateurs</li>
            <li>Rapports de stock</li>
            <li>Paramètres</li>
        </ul>
        <a href="index.php" class="logout">Déconnexion</a>
    </div>

    <div class="main">
        <h1 style="color: var(--vert-sapin);">Bienvenue, Administrateur</h1>
        <div class="card-container">
            <div class="card"><h3>Utilisateurs</h3><p>2 actifs</p></div>
            <div class="card"><h3>Alertes Stock</h3><p style="color:red;">5 produits bas</p></div>
            <div class="card"><h3>Activités</h3><p>Dernière connexion : Aujourd'hui</p></div>
        </div>
    </div>

</body>
</html>-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Administrateur</title>
    <style>
        body { background-color: #EBEAE6; font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { text-align: center; width: 350px; }
        .logo-box { background: white; border: 2px solid #1A3924; border-radius: 50%; width: 110px; height: 110px; margin: 0 auto 50px; display: flex; align-items: center; justify-content: center; overflow: hidden; }
        .logo-box img { width: 80%; }
        input { width: 100%; padding: 18px; margin-bottom: 25px; border: none; background: #D9D9D9; border-radius: 4px; font-style: italic; color: #666; box-sizing: border-box; }
        .btn-login { background: #FF944D; color: white; border: none; width: 100%; padding: 18px; font-size: 1.1rem; font-style: italic; cursor: pointer; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-box"><img src="logo.png"></div>
        <form action="presentation_admin.php">
            <input type="text" placeholder="nom d'utilisateur">
            <input type="password" placeholder="mot de passe">
            <button type="submit" class="btn-login">connexion administrateur</button>
        </form>
    </div>
</body>
</html>