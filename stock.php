<?php
require 'db.php';
// Récupération du stock en temps réel
$produits = $pdo->query("SELECT s.*, f.nom as fournisseur_nom FROM stocks s LEFT JOIN fournisseurs f ON s.id_fournisseur = f.id")->fetchAll();
?>

<div class="main-content">
    <div class="header-flex">
        <h2 style="color: var(--vert-sapin);">📦 Gestion des Stocks & Traçabilité</h2>
        <button class="btn-ges" onclick="openModal('modalEntree')" style="width: auto; padding: 10px 20px;">+ Nouvelle Entrée</button>
    </div>

    <!-- Tableau de suivi en temps réel -->
    <div class="card" style="margin-top: 20px; overflow-x: auto;">
        <table width="100%" style="border-collapse: collapse;">
            <thead>
                <tr style="text-align: left; border-bottom: 2px solid var(--fond);">
                    <th padding="15px">Produit</th>
                    <th>Fournisseur</th>
                    <th>Stock Actuel</th>
                    <th>Seuil</th>
                    <th>État</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produits as $p): ?>
                <tr style="border-bottom: 1px solid var(--fond);">
                    <td><strong><?= $p['nom_produit'] ?></strong></td>
                    <td><?= $p['fournisseur_nom'] ?></td>
                    <td><?= $p['quantite_actuelle'] ?> <?= $p['unite'] ?></td>
                    <td><?= $p['seuil_alerte'] ?></td>
                    <td>
                        <?php if($p['quantite_actuelle'] <= $p['seuil_alerte']): ?>
                            <span style="color: var(--orange); font-weight: bold;">⚠️ Alerte Basse</span>
                        <?php else: ?>
                            <span style="color: var(--vert-sapin);">✅ Optimal</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <button onclick="mouvementStock(<?= $p['id'] ?>, 'sortie')" style="background:none; border:1px solid var(--orange); color:var(--orange); cursor:pointer; border-radius:4px;">Sortie</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Historique de Traçabilité -->
    <h3 style="margin-top: 40px;">📜 Historique des mouvements (Traçabilité)</h3>
    <div class="card">
        <div id="historiqueTempsReel">
            <!-- Chargé dynamiquement en AJAX pour le temps réel -->
            <p style="font-style: italic; color: #888;">Chargement des derniers mouvements...</p>
        </div>
    </div>
</div>