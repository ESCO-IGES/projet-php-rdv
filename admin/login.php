<!DOCTYPE html>
<html lang="en">
<head>
  <title>Centre_Médicale |Mes RDV </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-secondary navbar-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image/img_avatar1.png" alt="Logo" style="width: 100px;" class="rounded-pill">
    </a>
  </div>
</nav>

</body>
</html>





<?php
session_start();
$login = "admin";
$pass = "admin";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["login"] === $login && $_POST["pass"] === $pass) {
        $_SESSION["admin"] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $erreur = "Identifiants incorrects.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Connexion Admin</title></head>
<body style= "background-color:pink ;">
<h2>Gérer mes RDV</h2>
<form method="POST">
    <input type="text" name="login" placeholder="Login" required><br>
    <input type="password" name="pass" placeholder="Mot de passe" required><br>
    <button type="submit">Se connecter</button>
</form>
<?php if (!empty($erreur)) echo "<p>$erreur</p>"; ?>
</body>
<footer style="background-color:rgb(98, 206, 206); text-align: center;" >Ganyou-Médicale| Copiyright @ 2025 GANYOU, tous droits réservés</footer>
</html>

