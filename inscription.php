<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GesTrack | Inscription</title>
    <style>
        :root {
            --vert-sapin: #1A3924;
            --orange: #FF944D;
            --fond: #F0F2F5;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, var(--vert-sapin) 0%, #2c5e3d 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        .signup-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }

        .signup-card h2 {
            color: var(--vert-sapin);
            margin-bottom: 10px;
        }

        .signup-card p {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 30px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            background: #f9f9f9;
        }

        .btn-signup {
            background: var(--orange);
            color: white;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            font-size: 1rem;
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-signup:hover {
            background: #e68545;
            transform: translateY(-2px);
        }

        .login-link {
            margin-top: 20px;
            display: block;
            font-size: 0.85rem;
            color: #888;
            text-decoration: none;
        }

        .login-link span {
            color: var(--orange);
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="signup-card">
        <img src="logo.png" alt="Logo" style="width: 70px; margin-bottom: 10px;">
        <h2>Créer un compte</h2>
        <p>Rejoignez la plateforme de gestion GesTrack</p>

        <form action="traitement_inscription.php" method="POST">
            <div class="form-group">
                <label>Nom complet</label>
                <input type="text" name="nom" placeholder="Ex: Mirabelle" required>
            </div>

            <div class="form-group">
                <label>Adresse Email</label>
                <input type="email" name="email" placeholder="exemple@domaine.com" required>
            </div>

            <div class="form-group">
                <label>Rôle</label>
                <select name="role">
                    <option value="magasinier">Magasinier</option>
                    <option value="admin">Administrateur</option>
                </select>
            </div>

            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="********" required>
            </div>

            <button type="submit" class="btn-signup">S'INSCRIRE MAINTENANT</button>
        </form>

        <a href="index.php" class="login-link">Déjà inscrit ? <span>Se connecter</span></a>
    </div>

</body>
</html>