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
     <title>Télé-medecine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <br>
    <p>
        <h5 style="background-color:wite;front-size: 10px;">
            <marquee behavior="" direction=""> Bienvenu sur la plateforme de consultation du cabinet
              medical du Docteur yacouba.
            </marquee>
       </h5>
       <br>
   
   <nav class="layout-navbar shadow-none py-0" style="background-color:rgb(77, 34, 170)">
  <div class="container-fluid">
     <div class="container px-0" style="border-bottom: 13px solidrgb(41, 34, 170); ">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4" 
        style="border-color: #fff !important; background-color: #fff !important;">
    <a class="navbar-brand" href="javascript:void(0)">
        <img src="image/logo1.jpg" class="rounded-circle" alt="Cinque Terre" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link fw-medium active" aria-current="page" href="javascript:void(0)">Accueil</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link fw-medium active"  aria-current="page" href="javascript:void(0)">Contactez-nous</a>
        </li>
        
      </ul>
   <div class="landing-menu-overlay d-lg-none"></div>
            
            <ul class="navbar-nav flex-row align-items-center ms-auto">
        
                    <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="ti ti-sm"></i>
                        </a>

                    </li>
                    <a href="javascript:void(0);" class="btn btn-primary mx-2 waves-effect waves-light">
                    <span class="d-none d-md-block">Rendez-Vous</span></a>
                
                <li>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light">
                       <span class="d-none d-md-block" data-bs-toggle="modal" data-bs-target="#myModal">Connexion</span></a>
                </li>
            </ul>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/photo1.png" alt="Los Angeles" class="d-block" style="width:99%">
      <div class="carousel-caption">
        <h3>Santé pour tous</h3>
        <p>n'ayez pas peur de la puquire!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/photo4.png" alt="Chicago" class="d-block" style="width:99%">
      <div class="carousel-caption">
        <h3>Examen de vérification</h3>
        <p>Examen de vérification</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="image/photo3.png" alt="New York" class="d-block" style="width:99%">
      <div class="carousel-caption">
        <h3>toujours se faire soigner</h3>
        <p>une vie sauvée faire notre fierté!</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">
  <div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Télésurveillance médicale</h1>
  <p>Un suivi à distance des données de santé du patient, comme 
    la tension ou le rythme cardiaque!</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Téléassistance</h3>
      <p><img src="image/P1.jpg" class="rounded" alt="Cinque Terre" height="100"></p>
      <p>Un médecin assiste un autre professionnel de santé lors d’un acte médical ou chirurgical.</p>
    </div>
    <div class="col-sm-4">
      <h3>Régulation</h3>
      <p><img src="image/P2.jpg" class="rounded" alt="Cinque Terre" height="100"></p>
      <p>Les centres d’urgence (SAMU) évaluent les situations médicales à distance pour orienter 
        les patients vers les soins adaptés</p>
    </div>
    <div class="col-sm-4">
      <h3>Téléexpertise</h3>        
      <p><img src="image/P3." class="rounded" alt="Cinque Terre" height="100"></p>
      <p>Un échange entre plusieurs médecins pour affiner
         un diagnostic ou une stratégie thérapeutique.</p>
    </div>
    <div class="container mt-3">
  <h2>Inscription</h2>
   <?php if (!empty($message)) echo "<p>$message</p>"; ?>
  <form method="POST">
    <div class="mb-3 mt-3">
      <label for="nom">Nom:</label>
      <input type="text" class="form-control"  placeholder="Entez votre nom" name="nom">
    </div>
    <div class="mb-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Entrez votre  email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="telephone">Téléphone:</label>
      <input type="text" class="form-control"  placeholder="Entrez votre numero" name="telephone">
    </div>
    <div class="mb-3 mt-3">
      <label for="objet">Objet du RDV:</label>
      <input type="text" class="form-control"  placeholder="Entrez votre le motive de votre RDV" name="objet">
    </div>
    <div class="mb-3 mt-3">
      <label for="datetime">Date:</label>
      <input type="datetime-local" class="form-control"  placeholder="Entrez la date votre RDV" name="date_heure">
    </div> 
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember">Veuillez cocher la case
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>
  </div>
</div>
<div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "><div class="gdlr-core-pbf-element"><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"><div class="gdlr-core-title-item-title-wrap clearfix"><h4 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 45px ;letter-spacing: 0px ;text-transform: none ;color: #343383 ;">Nos chiffres clés</h4>
</div>

<div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" data-skin="Counter"><div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 10px 0px 0px 0px;"><div class="gdlr-core-pbf-background-wrap"></div><div class="gdlr-core-pbf-background-frame" style="margin: 0px 0px 0px 0px;border-width: 0px 1px 0px 0px;border-style: solid ;border-color: #2e84c2 ;"></div><div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "><div class="gdlr-core-pbf-element"><div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 10px ;"><div class="gdlr-core-counter-item-top-icon" style="font-size: 50px ;"><i class="fa fa-users"></i></div><div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 49px ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration="4000" data-counter-start="0" data-counter-end="30">30</span><span class="gdlr-core-counter-item-suffix">K</span></div><div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content"><h5>patients guéri dans le monde</h5></div>
</div></div>
</div></div>
</div><div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="Counter"><div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 20px 0px 0px 0px;"><div class="gdlr-core-pbf-background-wrap">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer>
        <p>&copy; 2025 Mon Site Web. Tous droits réservés.</p>
    </footer>

</body>
</html>
