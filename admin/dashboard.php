<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

require_once "../includes/db.php";
$rendezvous = $conn->query("SELECT * FROM rendezvous ORDER BY date_heure DESC");
?>
<!DOCTYPE html>
<html>
<head><title>Liste de mes rendez-vous</title></head>
<body style="background-color:gray ;">> 
<h1>Liste des rendez-vous</h1>
<table border="1">
    <tr><th>Nom</th><th>Email</th><th>Téléphone</th><th>Objet</th><th>Date/Heure</th><th>Action</th></tr>
    <?php while ($rdv = $rendezvous->fetch_assoc()) { ?>
        <tr>
            <td><?= htmlspecialchars($rdv["nom"]) ?></td>
            <td><?= htmlspecialchars($rdv["email"]) ?></td>
            <td><?= htmlspecialchars($rdv["telephone"]) ?></td>
            <td><?= htmlspecialchars($rdv["objet"]) ?></td>
            <td><?= $rdv["date_heure"] ?></td>
            <td><a href="delete.php?id=<?= $rdv["id"] ?>" onclick="return confirm('Supprimer ?')">Supprimer</a></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
