<?php
// Ici on ajoutera plus tard le code PHP pour vider la session
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GesTrack | Déconnexion</title>
    <style>
        body { background: #1A3924; color: white; font-family: 'Segoe UI', sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .msg-box { text-align: center; background: rgba(255,255,255,0.1); padding: 50px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.1); }
        .loader { border: 4px solid rgba(255,255,255,0.3); border-top: 4px solid #FF944D; border-radius: 50%; width: 40px; height: 40px; animation: spin 1s linear infinite; margin: 20px auto; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        a { color: #FF944D; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="msg-box">
        <img src="logo.png" width="80">
        <h2>Déconnexion en cours...</h2>
        <p>Merci d'avoir utilisé GesTrack pour votre gestion aujourd'hui.</p>
        <div class="loader"></div>
        <p><a href="index.php">Cliquez ici pour revenir à l'accueil immédiatement</a></p>
    </div>
    <script>
        // Redirection automatique après 3 secondes
        setTimeout(function(){ window.location.href = "index.php"; }, 3000);
    </script>
</body>
</html>