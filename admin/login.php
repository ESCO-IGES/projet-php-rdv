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
<head><title>Connexion Admin</title>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Prise de rendez-vous</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    
<nav class="navbar navbar-expand-sm navbar-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="images/logo.jpg" class="rounded-circle" alt="images/logo.jpg" height="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)"></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Prendre un rendez-vous">
        <button class="btn btn-danger" type="button">Connexion</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Page de connexion</h1>
   
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4"> <img src="images/01.jpg" class="rounded" alt="Cinque Terre" width="400" height="400"> 
      
    </div>
    <div class="col-sm-4"> <img src="images/03.jpeg" class="rounded" alt="Cinque Terre" width="400" height="400">
      
    </div>
    <div class="col-sm-4"> <img src="images/05.jpeg" class="rounded" alt="Cinque Terre" width="400" height="400">
      
    </div>
  </div>
</div>

<div class="container-fluid p-5 bg-primary text-white text-center">
    <h2>Veuillez saisir le code pour accéder à la liste des rendez-vous.</h2>
<h3>Connexion</h3>
<form method="POST">
    <input type="text" name="login" placeholder="Login" required><br>
    <input type="password" name="pass" placeholder="Mot de passe" required><br>
    <button type="submit">Se connecter</button>
</form>
<?php if (!empty($erreur)) echo "<p>$erreur</p>"; ?>
</div>



</body>
</html>
