-- CREATE DATABASE Maïtaï --

CREATE TABLE personnel (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    personnel VARCHAR(50)
);

INSERT INTO personnel (personnel)
VALUES (
    'Président'
), (
    'Encadrant'
), (
    'Staff'
), (
    'Stagiaire'
);

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    mail VARCHAR(50) UNIQUE,
    mdp VARCHAR(50),
    team VARCHAR(6),
    id_personnel INT,
    FOREIGN KEY (id_personnel) REFERENCES personnel(id)
);

INSERT INTO users (nom, prenom, mail, mdp, team, personnel)
VALUES (
    'Martin',
    'Jules',
    'jules.martin@maïtaï.fr',
    MD5('MDP'),
    NULL,
    1
), (
    'Lebreton',
    'Loris',
    'loris.lebreton@maïtaï.fr',
    MD5('MDP'),
    NULL,
    2
), (
    'Seigeot',
    'Maxence',
    'maxence.seigeot@maïtaï.fr',
    MD5('MDP'),
    NULL,
    5
), (
    'Linget',
    'Evhan',
    'evhan.linget@maïtaï.fr',
    MD5('MDP'),
    'team A',
    6
), (
    'Comba',
    'Yannick',
    'yannick.comba@maïtaï.fr',
    MD5('MDP'),
    'team A',
    3
);

CREATE TABLE clients (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    adresse VARCHAR (100),
    email VARCHAR (50),
    telephone VARCHAR(20)
);

INSERT INTO clients (nom, prenom, adresse, email, telephone)
VALUES (
    'Bachelot',
    'Tom',
    '25 rue de la nonexistence',
    'bachelot.tom@gmail.com',
    '01 02 03 04 05'
), (
    'Brossard',
    'Pierre',
    '42 rue de la vie',
    'brossard.pierre@yahoo.fr',
    '05 04 03 02 01'
), (
    'Toto',
    'Tata',
    'AmenoTorino',
    'toto.tata@laposte.net',
    '01 23 45 67 89'
);

