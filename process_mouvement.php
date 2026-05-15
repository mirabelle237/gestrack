<?php
session_start();
require 'db.php';

$id = $_POST['id_produit'];
$qty = intval($_POST['quantite']);
$type = $_POST['type']; // 'entree' ou 'sortie'
$user = $_SESSION['username'];

// 1. Récupérer le stock actuel pour la traçabilité
$stmt = $pdo->prepare("SELECT quantite_actuelle FROM stocks WHERE id = ?");
$stmt->execute([$id]);
$stock_avant = $stmt->fetchColumn();

// 2. Calculer le nouveau stock
$stock_apres = ($type == 'entree') ? ($stock_avant + $qty) : ($stock_avant - $qty);

// 3. Transaction SQL pour assurer l'intégrité
$pdo->beginTransaction();
try {
    // Mise à jour stock
    $pdo->prepare("UPDATE stocks SET quantite_actuelle = ? WHERE id = ?")->execute([$stock_apres, $id]);
    
    // Enregistrement historique
    $sqlH = "INSERT INTO mouvements (id_produit, type_mouvement, quantite, stock_avant, stock_apres, auteur, motif) 
             VALUES (?, ?, ?, ?, ?, ?, ?)";
    $pdo->prepare($sqlH)->execute([$id, $type, $qty, $stock_avant, $stock_apres, $user, $_POST['motif']]);
    
    $pdo->commit();
    echo json_encode(['status' => 'success']);
} catch (Exception $e) {
    $pdo->rollBack();
    echo json_encode(['status' => 'error']);
}