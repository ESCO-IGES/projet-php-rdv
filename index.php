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
    <title>MEDECINE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"> <img src="image/P1.jpeg" class="rounded-circle" alt="Cinque Terre" height="50" width="60" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Contactez-nous</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Simulateur</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Rechercher">
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#myModal"> Rendez-vous </button>
      </form>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/A1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="image/A2.jpg" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="image/A4.jpg" alt="New York" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div><br>

<div class="container pt-3">
  <h1 style="text-align: center;"> Nos Services </h1>
<div class="row"> 
  <div class="col-sm-6">
    <div class="container mt-3">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action">Chirurgie générale et spécialisée</a>
    <a href="#" class="list-group-item list-group-item-action">Médécine interne</a>
    <a href="#" class="list-group-item list-group-item-action">Pédiatrie</a>
    <a href="#" class="list-group-item list-group-item-action">Gynécologie-obstétrique</a>
    <a href="#" class="list-group-item list-group-item-action">Ophtalmologie</a>
    <a href="#" class="list-group-item list-group-item-action">Cardiologie</a>
  </div>
</div>

  </div>

  <div class="col-sm-6">
    <div class="container mt-3">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action">Pneumologie</a>
    <a href="#" class="list-group-item list-group-item-action">Dermatologie</a>
    <a href="#" class="list-group-item list-group-item-action">Néphrologie</a>
    <a href="#" class="list-group-item list-group-item-action">Endocrinologie</a>
    <a href="#" class="list-group-item list-group-item-action">Oncologie</a>
    <a href="#" class="list-group-item list-group-item-action">Urologie</a>
  </div>
</div>
  </div>
</div>
</div><br>
<div class="container pt-3">
  <h1 style="text-align: center;">Contactez-nous</h1>
  <p style="text-align: center;">Envoyez-nous un message si vous avez des question ou des remarques.</p>
  <div class="row">
    <div class="col-sm-7"> <img src="image/contact2.jpg" class="rounded" style="width:100%"> </div>
    <div class="col-sm-5">
       <form action="/action_page.php">
<div class="mb-3">
      <label for="Nom">Veuillez renseigner votre nom complet</label>
      <input type="text" class="form-control" id="Nom" placeholder="Enter votre nom complet" name="Nom"style="width:400px; 
      height:50px;" >
    </div>
    <div class="mb-3 mt-3">
      <label for="email"> Veuillez renseigner votre email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="width:400px; 
      height:50px;" >
    </div>
    <div class="mb-3 mt-3">
      <label for="comment">Votre messages</label>
      <textarea class="form-control" rows="5" id="comment" placeholder="Ecrire un message" name="text" style="width:400px; 
      height:150px;"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyez</button>
  </form>
    </div>
  </div>
  </div><br><br><br>
<footer>
    <p style="background-color:green ; color:white; text-align:center ;margin:auto;width:auto;height:auto">&copy; 2025 Mon Site Web. Tous droits réservés.</p>
        </footer>  

 <!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" style="text-align: center;margin-left:auto;margin-right:auto;">Formulaire de Rendez-vous</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      
    <?php if (!empty($message)) echo "<p>$message</p>"; ?>
    <form method="POST" style="text-align: center;margin-left:auto;margin-right:auto;">
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="telephone" placeholder="Téléphone" required><br>
        <input type="text" name="objet" placeholder="Objet du RDV" required><br>
        <input type="datetime-local" name="date_heure" required><br>
        <button type="submit">Valider</button>
    </form>
   
  </form>
</div>
 </div>
</div>



    
</body>
</html>