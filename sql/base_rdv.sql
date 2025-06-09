CREATE DATABASE IF NOT EXISTS gestion_rdv;
USE gestion_rdv;

CREATE TABLE IF NOT EXISTS rendezvous (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    email VARCHAR(100),
    telephone VARCHAR(20),
    objet TEXT,
    date_heure DATETIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
