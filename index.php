<!--<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GesTrack - Login</title>
    <style>
    .logo-container img {
    width: 150px;           
    height: 150px;         
    object-fit: cover;      
    border-radius: 50%;     
}
</style>
</head>
<body style=" transition: opacity 0.5s;">
    <div class="login-wrapper">
        <div class="login-card">
            <div class="logo-container">
                <img src="logo.png" alt="GesTrack Logo">
            </div>
            <form id="loginForm" action="auth.php" method="POST">
                <fieldset>
                <div class="input-group">
                    <input type="text" name="username" placeholder="nom d'utilisateur">
                    <span>👤</span>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="mot de passe">
                    <span>🔒</span>
                </div>
                <button type="submit" class="btn-ges">connexion magasinier</button>
                </fieldset>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>-->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GesTrack | Gestion de Stock Agro-Alimentaire</title>
    <style>
        :root {
            --vert-sapin: #D9D9D9;
            --orange-clair: #FF944D;
            --blanc: #FFFFFF;
            --gris-fond: #F2F2F2;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--vert-sapin) 0%, #D9D9D9 100%);
            background-color: 1A3924;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--blanc);
        }

        .welcome-card {
            background: rgb(5, 78, 19);
            backdrop-filter: blur(10px);
            padding: 50px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.5);
            max-width: 500px;
            width: 90%;
        }

        .logo-container {
            background: white;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 4px solid var(--orange-clair);
        }

        .logo-container img {
            width: 80%;
            height: auto;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }

        h1 span { color: var(--orange-clair); }

        p {
            font-weight: 300;
            margin-bottom: 40px;
            opacity: 0.8;
            line-height: 1.6;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn {
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .btn-primary {
            background: var(--orange-clair);
            color: white;
            box-shadow: 0 4px 15px rgba(255, 148, 77, 0.3);
        }

        .btn-secondary {
            border: 2px solid var(--blanc);
            color: var(--blanc);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>

    <div class="welcome-card">
        <div class="logo-container">
            <img src="logo.png" alt="GesTrack Logo">
        </div>
        <h1>Ges<span>Track</span></h1>
        <p>Optimisez la gestion de vos stocks agro-alimentaires au Cameroun avec une précision stratégique.</p>
        
        <div class="btn-group">
            <a href="login_magasinier.php" class="btn btn-primary">Se connecter</a>
        </div>
    </div>

</body>
</html>