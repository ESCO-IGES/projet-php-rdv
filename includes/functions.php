<?php
require_once "db.php";

function ajouterRendezVous($nom, $email, $telephone, $objet, $date_heure) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO rendezvous (nom, email, telephone, objet, date_heure) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nom, $email, $telephone, $objet, $date_heure);
    $stmt->execute();
    $stmt->close();
}
