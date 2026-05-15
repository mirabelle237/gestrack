<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Magasinier - GesTrack</title>
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #EBEAE6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-card { text-align: center; width: 400px; }
        .logo-circle { background: white; border: 2px solid #1A3924; border-radius: 50%; width: 120px; height: 120px; margin: 0 auto 40px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .logo-circle img { width: 80%; }
        input { width: 100%; padding: 18px; margin-bottom: 20px; border: none; background: #D9D9D9; color: #555; font-size: 16px; border-radius: 4px; box-sizing: border-box; font-style: italic; }
        .btn-submit { background: #FF944D; color: white; border: none; width: 100%; padding: 18px; cursor: pointer; text-transform: lowercase; font-style: italic; font-size: 1.1rem; border-radius: 4px; transition: 0.3s; }
        .btn-submit:hover { background: #e68545; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="logo-circle">
            <img src="logo.png" alt="GesTrack">
        </div>
        <form action="auth.php" method="POST">
            <input type="text" name="username" placeholder="nom d'utilisateur">
            <input type="password" name="password" placeholder="mot de passe">
            <button type="submit" class="btn-submit">connexion magasinier</button>
        </form>
        <p><a href="index.php" style="color: gray; text-decoration: none; font-size: 0.8rem;">Retour à l'accueil</a></p>
    </div>
</body>
</html>