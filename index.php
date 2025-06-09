<?php
require_once "includes/db.php";
require_once "includes/functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $objet = $_POST["objet"];
    $date_heure = $_POST["date_heure"];

    ajouterRendezVous($nom, $email, $telephone, $objet, $date_heure);
    $message = "Rendez-vous enregistré avec succès !";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prise de rendez-vous</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Formulaire de rendez-vous</h1>
    <?php if (!empty($message)) echo "<p>$message</p>"; ?>
    <form method="POST">
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="telephone" placeholder="Téléphone" required><br>
        <input type="text" name="objet" placeholder="Objet du RDV" required><br>
        <input type="datetime-local" name="date_heure" required><br>
        <button type="submit">Valider</button>
    </form>
</body>
</html>
