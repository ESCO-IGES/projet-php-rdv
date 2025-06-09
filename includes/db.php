<?php
$conn = new mysqli("localhost", "root", "", "gestion_rdv");
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}
