<marquee behavior="Bienvenue sur la page de connexion" direction="Bienvenue sur la page de connexion"></marquee>
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
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Prise de rendez-vous</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>


<nav class="navbar navbar-expand-sm navbar-dark bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="images/logo.jpg" class="rounded-circle" alt="images/logo.jpg" height="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)" text color dark grey>ACCUIEL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">A PROPOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">CONTACTEZ-NOUS</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Prendre un rendez-vous">
        <button class="btn btn-primary" type="button">Connexion</button>
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
      <img src="images/ing.png" alt="images/ing.png" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="images/image2.jpg" alt="images/image2.jpg" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="images/img.jpg" alt="images/img.jpg" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="images/image.jpg" alt="images/image.jpg" class="d-block" style="width:100%">
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



<div class="container pt-5">
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>NOS services</h1>
  </div>
  

  <div class="container mt-5">
  <div class="row">
    <div class="col-sm-4"> <img src="images/02.jpg" class="rounded" alt="Cinque Terre" width="400" height="400"> 
      
    </div>
    <div class="col-sm-4"> <img src="images/03.jpeg" class="rounded" alt="Cinque Terre" width="400" height="400">
      
    </div>
    <div class="col-sm-4"> <img src="images/04.jpeg" class="rounded" alt="Cinque Terre" width="400" height="400">
      
    </div>
  </div>
</div>
<div text-white text-center></div>
<p>Parcourez ces FAQs pour trouver nos services.</p>

<div class="row">
    <div class="col-sm-6">
    <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
        1. Services système
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
        <div class="card-body">
        
        Ce sont les services de base nécessaires au fonctionnement d’un ordinateur ou d’un réseau.

Système d’exploitation (OS) : gère le matériel et les logiciels (Windows, Linux, macOS)

Services de fichiers : gestion du stockage et de l’accès aux fichiers (ex. : NFS, Samba)

Services d’impression : gestion des imprimantes (ex. : CUPS sous Linux)

Services d’amorçage réseau : démarrage des machines via le réseau (ex. : PXE)


        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
        2. Services réseau
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
        
        Assurent la communication entre ordinateurs et dispositifs connectés.

DHCP (Dynamic Host Configuration Protocol) : attribution automatique d'adresses IP

DNS (Domain Name System) : traduction des noms de domaine en adresses IP

Proxy : intermédiaire entre client et serveur

Firewall (pare-feu) : contrôle du trafic réseau

VPN (Virtual Private Network) : tunnel sécurisé pour accéder à distance à un réseau
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
        3. Services applicatifs
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
        
        Fournissent des fonctions spécifiques aux utilisateurs via des logiciels.

Messagerie électronique : ex. Outlook, Gmail

Serveur web : héberge des sites internet (ex. : Apache, Nginx)

Base de données : stockage et gestion des données (ex. : MySQL, PostgreSQL, Oracle)

Serveur FTP : transfert de fichiers (ex. : FileZilla Server)

Cloud computing : services à la demande sur Internet (ex. : Google Drive, AWS, Azure)


        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="btn" data-bs-toggle="collapse" href="#collapse">
        4. Services de sécurité informatique
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
        <div class="card-body">
        
        Protègent les données, les utilisateurs et les systèmes.

Antivirus / antimalware

Authentification et autorisation : contrôle des accès

Chiffrement : protection des données (ex. : SSL/TLS)

Audit et journalisation : suivi des activités systèmes


        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
        5. Services de virtualisation et de conteneurisation
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
        <div class="card-body">
        
        Permettent d’exécuter plusieurs environnements isolés sur une même machine.

Hyperviseur : exécution de machines virtuelles (ex. : VMware, VirtualBox)

Docker : conteneurisation d’applications

Kubernetes : orchestration de conteneurs


        </div>
      </div>
    </div>
  </div>
</div>




<div class="col-sm-6">
<div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="btn" data-bs-toggle="collapse" href="#collapse6">
        6. Services de support et maintenance
        </a>
      </div>
      <div id="collapse6" class="collapse show" data-bs-parent="#accordion">
        <div class="card-body">
        
        Assurent le bon fonctionnement et l’évolution des systèmes.

Helpdesk / support technique

Supervision / monitoring : ex. : Zabbix, Nagios

Sauvegarde / restauration : ex. : Veeam, Acronis
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse7">
        7. Services web et en ligne
      </a>
      </div>
      <div id="collapse7" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
        
        Offerts via Internet ou des intranets.

Web services (API REST, SOAP) : communication entre applications

Applications SaaS : logiciels hébergés (Google Docs, Office 365)

Plateformes e-learning, e-commerce, etc.
        </div>
      </div>
    </div>
    
      </div>
    </div>
   
</div>
</div>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>L'informatique au coeur de l'univers</h1>
   
</div>
<div class="container pt-5">
  <h1>Contactez-nous</h1>
  

  <div class="row">
  <div class="col-sm-5">
    <img src="images/05.jpg" alt="images/05.jpg" class="rounded" style="width:100%">
  </div>
  <div class="col-sm-7">
  <h1>Formulaire de rendez-vous</h1>
    <legend></legend>
   
    <?php if (!empty($message)) echo "<p>$message</p>"; ?>
    <form method="POST">
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="telephone" placeholder="Téléphone" required><br>
        <input type="text" name="objet" placeholder="Objet du RDV" required><br>
        <input type="datetime-local" name="date_heure" required><br>
        <button type="submit" class="btn btn-danger">Valider</button>
    </form>
  </div>

</div>
<style>
.all-browsers {
  margin: 0;
  padding: 5px;
  background-color: lightgray;
}

.all-browsers > h1, .browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}

footer {
  text-align: center;
  padding: 3px;
  background-color: blue;
  color: white;
}
</style>
<style>
.all-browsers {
  margin: 0;
  padding: 5px;
  background-color: seagreen;
}

.all-browsers > h1, .browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}

footer {
  text-align: center;
  padding: 3px;
  background-color: cryan; 
  color: white;
}

</style>

<style>
img {
  float: left;
}

p.clear {
  clear: left;
}
</style>

<h1>Entréprise certifiée</h1>

<img src="images/css.gif" width="100" height="132">

<p class="clear">80% de clients satisfait 2010 à sa création</p>
<p><strong>97% de clients satisfait de nos jours</strong></p>


<footer>
  <p>Page de prise de rendez-vous<br>
  <a>Realisé par KALAGA Abdoul Razak Faïssal</a></p>
</footer>


    
</body>
</html>
