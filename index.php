<!DOCTYPE html>
<html lang="en">
<head>
  <title>Centre Médicale Ganyou</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-primary bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="image/logo.jpg" class="rounded-circle" alt="Cinque Terre" height="65"</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Carte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Présentation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Horaire</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Recherches">
        <button class="btn btn-primary" type="button">Rechercher</button>
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
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/img1.jpg" alt="/image/img1.jpg" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="image/img2.jpg" alt="/image/img2.jpg" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="image/img3.jpg" alt="/image/img3.jpg" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="image/img4.jpg" alt="/image/img4.jpg" class="d-block" style="width:100%">
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
  <p style="background-color:pink ; text-align: center;" >Bienvenue ! Confiez votre suivi à un sage-femme expérimentée. Réservez votre consultation en ligne 2 minutes.   </p>
</div>

<div class= "row">

<div class="col-sm-6">
    <div id="accordion">
        <div class="card">
            <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#collapseOne">1. Combien de praticiens exercant la profession de sage-femme exerercent chez Ganyou Médicale ?
            </a>
            </div>
            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body">
           3 praticiens exercant la profession de sage-femme consultent à Ganyou Médicale.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#collapsetwo">2. Quels sont les 2 plus gros établissements de santé impliquant ds praticiens "sage-femme chez Ganyou Médicale" ?

            </a>
            </div>
            <div id="collapsetwo" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body">
           Les structures de santé accueillant le plus de profssionels "sage-femme à Ganyou Médicale" sont :
           CHU Régional Mère-Enfant
           Clinique les jardins de naissance 
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#collapsethree">3. Quels sont les 5 motifs de consultation les plus fréquemment rencontrés par un sage-femme chez Ganyou Médiale?
            </a>
            </div>
            <div id="collapsethree" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body">
            LES Motifs de consultation les plus courants pour un sage-femme chez Ganyou Médicale sont :
                - Suivi d'acupuncture
                - Pesée du bébé ou consultation d'allaitement
                - Préparation à l'accouchement en groupe cours1 : Départ à la maternité/Respiration
                - Cours2 : travail,péridurale
                - consultationd'allaitement/ aide au sevrage
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#collapsefour">4. Quels sont les spécialités pratiquées par un sage-femme chez Ganyou Médicale ? 

            </a>
            </div>
            <div id="collapsefour" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body">
            Les spécialités pratiquées le plus fréquemment par un sage-femme chez Ganyou Médicale sont :
            - Interuption volontaire de grossesse -IVC-médicamenteuse
            - Massage bébé
            - Protection Mternelle
            - Maladies/infections sexeuellement transmissibles (MST/IST)
            - Ménopause
            - Accompagnement interruption volontaire de grossesse (IVG)
            - Accompagnement interruption volontaire de grossesse -IVG-
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#collapsefive">5. Quels sont les types d'actes médicaux pratiqués par un sage-femme chez Ganyou Médicale ?

            </a>
            </div>
            <div id="collapsefive" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body">
            Les actes Médicaux pratiqués le plus souvent par un sage-femme chez Ganyou Médicale sont :
            - Pose d'implant pharmacologique souscutané
            - Accouchement céphalique unique par voie naturelle , chez une milyipare
            - Echographie de surveillance de la croissance foetale avec echographie-doppler des artères utérines de la mère et des vaisseaux du foetus
            - Echographie biometrique et morphologique d'une grossesse multifoetale du 2ème trimestre 
            - Pose d'un dispositif intra-utérin
            </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>


<div class= "row">

<div class="col-sm-6">
    <div id="accordion">
        <div class="card">


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
    <title>Prise de rendez-vous</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1 style="background-color:rgb(158, 243, 191)">Formulaire de rendez-vous</h1>
    <?php if (!empty($message)) echo "<p>$message</p>"; ?>
    <form method="POST">
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="telephone" placeholder="Téléphone" required><br>
        <input type="text" name="objet" placeholder="Objet du RDV" required><br>
        <input type="datetime-local" name="date_heure" required><br>
        <button type="submit">Valider</button>
    </form>
</body>
</html>

</div>
</div>
</div>
</div>



<div style=" background-color:rgb(200, 216, 248);container-fluid mt-3">
  <h3 style=" text-align: center;" > NOS MEDECIEN VOUS ACCOMPAGNE A CHACUNE DES ETAPES DE VOTRE PARCOURS DE SOINS   </h3>
<p class="text-primary"> Recherches les plus fréquentes </p>
<p class="text-primary"> Dentiste </p>
<p class="text-primary" > Masseur kinésithérapeute </p>
<p class="text-primary"> Ostéopathe </p>
<p class="text-primary" > Médecin généraliste </p>
<p class="text-primary" > Pédiatre </p>
<p class="text-primary"> Pédicure podologue </p>
<p class="text-primary" > Sage-femme </p>
</div>


<div style="background-color:rgb(158, 243, 191);container-fluid mt-3">
  <h3 style=" text-align: center;"> Preparez votre venue   </h3>

  <div class= "row">

    <div class="col-sm-6">
    <h3> Accéder au cabinet  </h3>
<p class="text-secondary"> - Mr ABDOUL GANYOU  </p>
<p class="text-secondary"> - Situation geographique : A BASSINKO | rue 14 </p>
<p class="text-secondary" >- oganyou@gmail.com </p>
<p class="text-secondary"> - Vous avez un parking devant le pole de santé. </p>
<p class="text-secondary"> - Le cabinet se situe au 1er etage. </p>


</div>
</div>


<div class= "row">

    <div class="col-sm-6">
    <h3> Information pratique</h3>
<p class="text-secondary"> - Tarif conventionné | paas de depassement d'honaires </p>
<p class="text-secondary"> - Tiers payant pratiqué </p>
<p class="text-secondary" >- Moyens de paiement acceptés : espèces, chèque, carte bancaire </p>
<p class="text-secondary"> - pensez a votre carte vitale </p>
<p class="text-secondary"> - Assurance acceptés</p>

</div>
</div>
</div>

<div class= "row">

    <div class="col-sm-6">
    <h3> Les horaires</h3>
<p class="text-secondary"> - Du lundi au vendredi | 7h30-19h </p>
<p class="text-secondary"> - Le samedi 9h-13h </p>
</div>
</div>


</body>
<footer style="background-color:rgb(98, 206, 206); text-align: center;" > Mentions Légales | Conditions générales d'utilisation | Politique relative a la protection des données personnelles | Nous contacter | Préference de cookies | @ 2025 GANYOU Médicale, tous droits réservés</footer>
</html>
