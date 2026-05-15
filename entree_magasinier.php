<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GesTrack | Entrée de Stock</title>
    <style>
        :root { --vert: #1A3924; --orange: #FF944D; --fond: #F0F2F5; }
        body { margin: 0; display: flex; height: 100vh; font-family: 'Segoe UI', sans-serif; background: var(--fond); }
        
        /* SIDEBAR RÉUTILISÉE */
        .sidebar { width: 280px; background: var(--vert); color: white; display: flex; flex-direction: column; }
        .sidebar-logo { padding: 30px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar-logo img { width: 60px; }
        .nav-links { flex-grow: 1; padding: 20px 0; }
        .nav-links a { display: block; padding: 15px 30px; color: white; text-decoration: none; font-size: 0.9rem; text-transform: uppercase; }
        .nav-links a.active { background: var(--orange); }

        /* FORMULAIRE ÉPURÉ */
        .main-content { flex-grow: 1; padding: 40px; display: flex; justify-content: center; }
        .form-container { background: white; padding: 40px; border-radius: 20px; width: 100%; max-width: 600px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        h1 { color: var(--vert); margin-bottom: 30px; border-left: 5px solid var(--orange); padding-left: 15px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #555; }
        input, select { width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background: #F9F9F9; }
        .btn-submit { background: var(--vert); color: white; border: none; padding: 15px; width: 100%; border-radius: 8px; font-weight: bold; cursor: pointer; transition: 0.3s; }
        .btn-submit:hover { background: var(--orange); transform: translateY(-2px); }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-logo"><img src="logo.png"><p>GESTRACK</p></div>
        <div class="nav-links">
            <a href="presentation_magasinier.php">Accueil</a>
            <a href="entree_magasinier.php" class="active">Entrée de Stock</a>
            <a href="sortie_magasinier.php">Sortie de Stock</a>
            <a href="historique_magasinier.php">Historique</a>
            <a href="inventaire_magasinier.php">Inventaire</a>
        </div>
    </div>

    <div class="main-content">
        <div class="form-container">
            <h1>📦 Nouvelle Entrée</h1>
            <form action="traitement_entree.php" method="POST">
                <label>Désignation du Produit</label>
                <select name="produit">
                    <option>Sélectionner un article...</option>
                    <option>Farine de Maïs</option>
                    <option>Huile de Palme</option>
                </select>
                <label>Quantité Reçue</label>
                <input type="number" name="quantite" placeholder="Ex: 100">
                <label>Fournisseur</label>
                <input type="text" name="fournisseur" placeholder="Nom du fournisseur">
                <button type="submit" class="btn-submit">VALIDER L'ARRIVAGE</button>
            </form>
        </div>
    </div>
</body>
</html>