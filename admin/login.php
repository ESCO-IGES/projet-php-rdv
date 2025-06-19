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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<?php if (!empty($erreur)) echo "<p>$erreur</p>"; ?>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image/logo1.jpg" alt="Logo" style="width:60px;" class="rounded-pill">
    </a>
  </div>
</nav> <br>

<form method="POST">
    <input type="text" name="login" placeholder="Login" required><br>
    <input type="password" name="pass" placeholder="Mot de passe" required><br>
    <button type="submit">Se connecter</button>
</form>

</body>
</html>
