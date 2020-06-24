<!DOCTYPE html>
<html lang-"fr">

<head>
<title>T'DOU</title>

  <meta charset="utf-8">
 <link rel="icon" type="image/jpg" href="img/favicon.png" />  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

   <!-- BOOTSTRAP CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <header>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">

<!-- Navbar -->

<nav class="navbar navbar-expand-lg  navbar-dark fixed-top " id="navbar">
<img id="logo" alt="logo" src="img/logo.png" class="px-4 ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="px-4 collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="px-2 nav-item active">
          <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class=" px-2 nav-item">
          <a class="nav-link  text-white " href="index.php">Nos collections</a>
        </li>
        <li class="px-2  nav-item">
          <a class="nav-link text-white" href="index.php">Qui sommes-nous</a>
        </li>
        <li class="px-2  nav-item">
          <a class="nav-link text-white" href="contact.php">Nous contacter</a>
        </li>
        <li class="px-1 nav-item">
            <img class="taille" alt="logo" src="img/icon-search.png" onclick="recherch()"id="search">

<form name="formbarre">
<input type="text" name="barre" id="barre" placeholder= "Rechercher..." />

</form>
        </li>
      </ul>
     <ul class="px-4  navbar-nav mr-auto d">
       <li class="px-4 nav-item">
                    <a href="contact.php" class="stdetaile"> <img class="taille" alt="telephone" src="img/icon-phone.png"></a>
       </li>
       <li class="px-4 nav-item">
         <a href="contact.php" class="stdetaile">  <img class="taille" alt="utilisateur"src="img/icon-user.png"></a>
       </li>
       <li class="px-4 nav-item">
         <a href="contact.php" class="stdetaile">  <img class="taille" alt="panier"src="img/icon-basket.png"></a>
       </li>
     </ul>
    </div>
  </nav>
<!-- Fin Navbar -->

  </header>
<main>

<!-- À propos -->

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <img class="img" src="img/man-smiling.jpg" alt="man">
       </div>
       <h1>À propos</h1>
     </div>
     <div class="about">
      <p><I> TDOÙ? est liée à l'arrivée des plaques d'immatriculation européennes, qui à l'origine
              nous empêchaient d'afficher notre appartenance à notre département. Mais aussi nous
              empêchaient de continuer nos nombreux jeux par rapport aux départements
              ("elle vient d'où cette voiture?", "-chauffard!!" -"il est d'où celui-là encore?",...).
              C’est pour cela que nous voulions répondre au manque qu'entrainait la suppression du numéro
              de département sur les plaques.En conséquence, un travail de recherche et d'innovation s’est
              mit en place et TDOÙ? a déposé un concept: celui d'associer un numéro de département au blason
              officiel du même département.
        </p></I>
      </div>
    </div>
  </main>

<?php include 'footer.php' ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script language="javascript">

function recherch() {
      document.getElementById("search").style.display = "none";
      document.getElementById("barre").style.display = "block";
      var span = document.getElementById('navbar') // L'élément du DOM
      span.style.fontSize = '15px' // Font-size à 15px
    }
</script>

<script>

const about = document.querySelector('about');
let i = 0;

about.textContent = "0px";

document.documentElement.addEventListener('mousewheel', function(e){
	i += e.deltaY;
  about.textContent = i + "px";
  about.style.left = i + 'px';
})

</script>

</body>
</html>
