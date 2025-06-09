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
<body>
<h2>Connexion</h2>
<form method="POST">
    <input type="text" name="login" placeholder="Login" required><br>
    <input type="password" name="pass" placeholder="Mot de passe" required><br>
    <button type="submit">Se connecter</button>
</form>
<?php if (!empty($erreur)) echo "<p>$erreur</p>"; ?>
</body>
</html>
