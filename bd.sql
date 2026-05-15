-- On désactive temporairement les clés étrangères pour pouvoir supprimer sans erreur
SET FOREIGN_KEY_CHECKS = 0;

-- On supprime les anciennes tables pour les recréer proprement
DROP TABLE IF EXISTS mouvements;
DROP TABLE IF EXISTS stocks;
DROP TABLE IF EXISTS fournisseurs;
DROP TABLE IF EXISTS users;

SET FOREIGN_KEY_CHECKS = 1;

-- Maintenant on recrée tout avec les bonnes colonnes (Traçabilité + Email)
CREATE TABLE fournisseurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    telephone VARCHAR(20)
);

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL, 
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'magasinier') NOT NULL,
    email VARCHAR(100),
    depot VARCHAR(100)
);

CREATE TABLE stocks (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom_produit VARCHAR(100) NOT NULL,
    quantite_actuelle INT DEFAULT 0,
    seuil_alerte INT DEFAULT 10,
    unite VARCHAR(20) DEFAULT 'kg',
    id_fournisseur INT,
    FOREIGN KEY (id_fournisseur) REFERENCES fournisseurs(id) ON DELETE SET NULL
);

CREATE TABLE mouvements (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_produit INT,
    type_mouvement ENUM('entree', 'sortie') NOT NULL,
    quantite INT NOT NULL,
    stock_avant INT NOT NULL,
    stock_apres INT NOT NULL,
    auteur VARCHAR(50) NOT NULL,
    motif VARCHAR(255),
    date_mouvement TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_produit) REFERENCES stocks(id) ON DELETE CASCADE
);

-- Insertion des données de test (Cette fois ça marchera !)
INSERT INTO fournisseurs (nom, email, telephone) VALUES ('Agro Supply Co', 'contact@agrosupply.com', '+237 600 000 000');
INSERT INTO users (username, password, role) VALUES ('admin', 'admin123', 'admin'), ('magasinier', 'mag123', 'magasinier');