<?php
require 'db_connect.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $donnees = json_decode(file_get_contents('php://input'), true);
    
    $nom = trim($donnees['nom'] ?? '');
    $email = trim($donnees['email'] ?? '');
    $username = trim($donnees['username'] ?? '');
    $password = trim($donnees['password'] ?? '');
    $depot = trim($donnees['depot'] ?? '');
    
    // Validation
    if (!$nom || !$email || !$username || !$password || !$depot) {
        echo json_encode(['success' => false, 'message' => 'Tous les champs sont obligatoires']);
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Email invalide']);
        exit;
    }
    
    if (strlen($password) < 6) {
        echo json_encode(['success' => false, 'message' => 'Le mot de passe doit contenir au moins 6 caractères']);
        exit;
    }
    
    try {
        // Vérifier si l'username existe déjà
        $stmt = $pdo->prepare('SELECT id FROM users WHERE username = ?');
        $stmt->execute([$username]);
        if ($stmt->rowCount() > 0) {
            echo json_encode(['success' => false, 'message' => 'Cet identifiant est déjà utilisé']);
            exit;
        }
        
        // Insérer le nouveau magasinier
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $pdo->prepare('INSERT INTO users (username, password, role, email, depot) VALUES (?, ?, ?, ?, ?)');
        
        if ($stmt->execute([$username, $password_hash, 'magasinier', $email, $depot])) {
            echo json_encode(['success' => true, 'message' => 'Magasinier ajouté avec succès']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'ajout du magasinier']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Erreur base de données: ' . $e->getMessage()]);
    }
    exit;
}

// Si GET, retourner le formulaire
echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
?>
