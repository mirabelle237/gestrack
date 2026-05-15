// <?php
// Simulation de récupération de données
$alertes = [
    ['produit' => 'Farine de Blé', 'stock' => 5, 'seuil' => 10, 'fournisseur' => 'AgroFournisseur', 'email' => 'contact@agro.com']
];
?>
<!--<div class="main-content">
    <header>
        <h1>Espace Magasinier - Alertes Stock</h1>
    </header>

    <div class="stats-grid">
        <?php foreach ($alertes as $item): ?>
        <div class="card">
            <h3 style="color: var(--vert-sapin);"><?= $item['produit'] ?></h3>
            <p>Stock actuel : <strong><?= $item['stock'] ?> kg</strong></p>
            <p style="color: red;">Alerte : inférieur à <?= $item['seuil'] ?> kg</p>
            <hr>
            <p>Fournisseur : <?= $item['fournisseur'] ?></p>
            <a href="mailto:<?= $item['email'] ?>?subject=Commande Urgente: <?= $item['produit'] ?>" 
               class="alert-btn" 
               onclick="return confirmerCommande('<?= $item['fournisseur'] ?>')">
               📧 Contacter Fournisseur
            </a>
        </div>
        // <?php endforeach; ?>
    </div>
</div>-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GesTrack | Gestion Magasiniers</title>
    <style>
        /* (Même CSS que la page précédente pour l'harmonie) */
        :root { --vert: #1A3924; --orange: #FF944D; --fond: #F0F2F5; --blanc: #FFFFFF; }
        body { margin: 0; display: flex; height: 100vh; font-family: 'Segoe UI', sans-serif; background: var(--fond); }
        .sidebar { width: 280px; background: var(--vert); color: white; display: flex; flex-direction: column; }
        .sidebar-logo { padding: 30px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar-logo img { width: 60px; }
        .nav-links { flex-grow: 1; padding: 20px 0; }
        .nav-links a { display: block; padding: 15px 30px; color: white; text-decoration: none; font-size: 0.9rem; text-transform: uppercase; }
        .nav-links a:hover, .nav-links a.active { background: var(--orange); }
        .main-content { flex-grow: 1; padding: 30px; }
        .user-card { background: white; border-radius: 15px; padding: 20px; display: flex; align-items: center; margin-bottom: 15px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        .user-avatar { width: 50px; height: 50px; border-radius: 50%; background: var(--vert); color: white; display: flex; justify-content: center; align-items: center; margin-right: 20px; font-weight: bold; }
        .btn-create { background: var(--vert); color: white; padding: 12px 20px; border: none; border-radius: 8px; cursor: pointer; }
        /* Styles pour le modal */
        .modal { position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.4); }
        .modal-content { background-color: #fefefe; margin: 10% auto; padding: 30px; border: 1px solid #888; border-radius: 10px; width: 90%; max-width: 500px; }
        .close { color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer; }
        .close:hover { color: var(--orange); }
        .form-group { margin-bottom: 15px; text-align: left; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: 600; }
        .form-group input, .form-group select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        .btn-cancel { background: #999; color: white; padding: 12px 20px; border: none; border-radius: 8px; cursor: pointer; }
        .btn-cancel:hover { background: #777; }
        .btn-create:hover { background: var(--orange); }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-logo"><img src="logo.png"><p style="font-weight: bold;">GESTRACK</p></div>
        <div class="nav-links">
            <a href="presentation_admin.php">Accueil</a>
            <a href="dashboard_admin.php">Dashboard</a>
            <a href="inventaire_admin.php">Gestion Inventaires</a>
            <a href="magasiniers_admin.php" class="active">Gestion Magasiniers</a>
        </div>
    </div>

    <div class="main-content">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <h1 style="color: var(--vert);">Équipe des Magasiniers</h1>
            <button class="btn-create" onclick="afficherFormulaireAjout()">+ Nouveau Magasinier</button>
        </div>

        <div class="user-card">
            <div class="user-avatar">JM</div>
            <div style="flex-grow: 1;">
                <h3 style="margin: 0; color: var(--vert);">Jean Marc - Dépôt Douala</h3>
                <p style="margin: 5px 0 0; color: #888; font-size: 0.9rem;">Dernière activité : Il y a 10 minutes</p>
            </div>
            <button style="background:none; border: 1px solid #ddd; padding: 8px; border-radius: 5px; cursor: pointer;">Suspendre</button>
        </div>

        <div class="user-card">
            <div class="user-avatar">SL</div>
            <div style="flex-grow: 1;">
                <h3 style="margin: 0; color: var(--vert);">Samuel L. - Dépôt Yaoundé</h3>
                <p style="margin: 5px 0 0; color: #888; font-size: 0.9rem;">Dernière activité : Hier à 16:45</p>
            </div>
            <button style="background:none; border: 1px solid #ddd; padding: 8px; border-radius: 5px; cursor: pointer;">Suspendre</button>
        </div>
    </div>

    <!-- Modal d'ajout de magasinier -->
    <div id="modalAjout" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="fermerModal()">&times;</span>
            <h2>Ajouter un nouveau magasinier</h2>
            <form id="formulaireAjout" onsubmit="ajouterMagasinier(event)">
                <div class="form-group">
                    <label>Nom complet</label>
                    <input type="text" id="nom" name="nom" required placeholder="Ex: Jean Marc">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="email" name="email" required placeholder="exemple@email.com">
                </div>
                <div class="form-group">
                    <label>Identifiant (username)</label>
                    <input type="text" id="username" name="username" required placeholder="Ex: jeanmarc123">
                </div>
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" id="password" name="password" required placeholder="Minimum 6 caractères">
                </div>
                <div class="form-group">
                    <label>Dépôt/Lieu</label>
                    <select id="depot" name="depot" required>
                        <option value="">-- Sélectionner un dépôt --</option>
                        <option value="Dépôt Douala">Dépôt Douala</option>
                        <option value="Dépôt Yaoundé">Dépôt Yaoundé</option>
                        <option value="Dépôt Kinshasa">Dépôt Kinshasa</option>
                    </select>
                </div>
                <div style="margin-top: 20px; display: flex; gap: 10px;">
                    <button type="submit" class="btn-create">Ajouter</button>
                    <button type="button" class="btn-cancel" onclick="fermerModal()">Annuler</button>
                </div>
                <div id="message" style="margin-top: 15px; padding: 10px; border-radius: 5px; display: none;"></div>
            </form>
        </div>
    </div>

    <script>
        function afficherFormulaireAjout() {
            document.getElementById('modalAjout').style.display = 'block';
            document.getElementById('formulaireAjout').reset();
            document.getElementById('message').style.display = 'none';
        }

        function fermerModal() {
            document.getElementById('modalAjout').style.display = 'none';
        }

        function ajouterMagasinier(event) {
            event.preventDefault();

            const nom = document.getElementById('nom').value;
            const email = document.getElementById('email').value;
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const depot = document.getElementById('depot').value;

            const donnees = {
                nom: nom,
                email: email,
                username: username,
                password: password,
                depot: depot
            };

            fetch('ajouter_magasinier.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(donnees)
            })
            .then(response => response.json())
            .then(data => {
                const messageDiv = document.getElementById('message');
                if (data.success) {
                    messageDiv.style.backgroundColor = '#d4edda';
                    messageDiv.style.color = '#155724';
                    messageDiv.style.border = '1px solid #c3e6cb';
                    messageDiv.textContent = data.message;
                    messageDiv.style.display = 'block';
                    
                    setTimeout(() => {
                        fermerModal();
                        location.reload();
                    }, 2000);
                } else {
                    messageDiv.style.backgroundColor = '#f8d7da';
                    messageDiv.style.color = '#721c24';
                    messageDiv.style.border = '1px solid #f5c6cb';
                    messageDiv.textContent = data.message;
                    messageDiv.style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                const messageDiv = document.getElementById('message');
                messageDiv.style.backgroundColor = '#f8d7da';
                messageDiv.style.color = '#721c24';
                messageDiv.style.border = '1px solid #f5c6cb';
                messageDiv.textContent = 'Une erreur est survenue';
                messageDiv.style.display = 'block';
            });
        }

        window.onclick = function(event) {
            const modal = document.getElementById('modalAjout');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</body>
</html>