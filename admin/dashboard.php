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
<head><title>Dashboard</title></head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="assets/style.css">
<body>
<h1>Liste des rendez-vous</h1>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image/logo1.jpg" alt="Logo" style="width:60px;" class="rounded-pill">
    </a>
  </div>
  <div class="container mt-3">
  
  <button type="button" class="btn btn-primary">
    Messages <span class="badge bg-danger">4</span>
  </button>
  <button type="button" class="btn btn-danger">
    Notifications <span class="badge bg-dark">7</span>
  </button>
</div>
</nav>

<div class="container-fluid mt-3">
  <h3>Page de vérification de rendez-vous</h3>
  
</div>
<div class="container mt-3">
  <table class="table table-dark table-striped">
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
<div class="container mt-3">
  
  <div class="card" style="width:400px">
    <img class="card-img-top" src="image/p1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Yacouba Ouedraogo</h4>
      <p class="card-text">Administrateur Réseaux et Sécurité</p>
      <a href="#" class="btn btn-primary">Mon profil</a>
    </div>
  </div>
</body>
</html>
