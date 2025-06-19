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
<head>
    <title>Dashboard</title>
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
  
</head>
<body>
    
<nav class="navbar navbar-expand-sm navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image/P1.jpeg" alt="Cinque Terre" style="width:40px;" class="rounded-circle"  height="40" width="60">
    </a>
  </div>
</nav>

<h1 style="text-align: center;">Liste des rendez-vous</h1>
  <table class="table">
    <thead class="table-dark">


<table border="1" style="margin-left:auto;margin-right:auto">
    <tr><th>Nom</th><th>Email</th><th>Téléphone</th><th>Objet</th><th>Date/Heure</th><th>Action</th></tr>
    <?php while ($rdv = $rendezvous->fetch_assoc()) { ?>
        </thead>
       
        
<tbody>
        <tr>
            <td><?= htmlspecialchars($rdv["nom"]) ?></td>
            <td><?= htmlspecialchars($rdv["email"]) ?></td>
            <td><?= htmlspecialchars($rdv["telephone"]) ?></td>
            <td><?= htmlspecialchars($rdv["objet"]) ?></td>
            <td><?= $rdv["date_heure"] ?></td>
            <td><a href="delete.php?id=<?= $rdv["id"] ?>" onclick="return confirm('Supprimer ?')">Supprimer</a></td>
        </tr>
        

    <?php } ?>
    </tbody>

</table>


</body>
</html>
