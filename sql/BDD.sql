-- CREATE DATABASE Maïtaï --


-- Création de la table profiles ( Admin ou Staff ) --
CREATE TABLE profiles (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    profil VARCHAR(50)
);

-- Insertion des valeurs Admin ou Staff à la table profiles --
INSERT INTO profiles (profiles)
VALUES (
    'Admin'
), (
    'Staff'
);

-- Création de la table users --
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    identifiant VARCHAR(50) UNIQUE,
    mdp VARCHAR(50),
    profil_id INT,
    FOREIGN KEY (profil_id) REFERENCES profiles(id)
);

-- Insertion du compte admin avec l'utilisation du cryptage MD5 --
INSERT INTO users (nom, prenom, identifiant, mdp)
VALUES (
    'Admin',
    'Admin',
    'Admin',
    MD5('Admin'),
    NULL,
    1
);

