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
<head>
    <title>Connexion Admin</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image/P1.jpeg" alt="Cinque Terre" style="width:40px;" class="rounded-circle"  height="40" width="60">
    </a>
  </div>
</nav>

<div class="container-fluid mt-3">
</div><br><br><br><br><br>
<h2 style="text-align: center;">Connexion</h2><br>
<form method="POST" style="text-align: center;">
    <input type="text" name="login" placeholder="Login" required style="width: 200px; text-align:center;"><br><br>
    <input type="password" name="pass" placeholder="Mot de passe" required style="width: 200px ;text-align:center;"><br><br>
    <button type="submit">Se connecter</button><br>
</form>
<?php if (!empty($erreur)) echo "<p>$erreur</p>"; ?><br><br><br><br><br><br><br><br><br>
<footer>
 <p style="background-color:green ; color:white; text-align:center ;margin:auto;width:auto;height:auto">&copy; 2025 Mon Site Web. Tous droits réservés.</p>
</footer>
</body>
</html>

