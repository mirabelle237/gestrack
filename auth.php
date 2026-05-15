<?php
session_start();
require 'db_connect.php'; // Connexion à gestrack_db

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Recherche de l'utilisateur
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->execute([$user, $pass]);
    $account = $stmt->fetch();

    // Vérification (Note: En production, utilise password_verify)
    if ($account) {
        $_SESSION['user_id'] = $account['id'];
        $_SESSION['username'] = $account['username'];
        $_SESSION['role'] = $account['role'];

        // Redirection selon le rôle
        if ($account['role'] == 'admin') {
            header('Location: dashboard_admin.php');
        } else {
            header('Location: magasinier_admin.php');
        }
        exit();
    } else {
        header('Location: index.php?error=1');
        exit();
    }
}