<!DOCTYPE html>
<html lang-"fr">

<head>
<title>T'DOU</title>

  <meta charset="utf-8">
 <link rel="icon" type="image/jpg" href="img/favicon.png"/>  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">

   <!-- BOOTSTRAP CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="main.css">
</head>

<body>
  <header>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
<img id="logo" alt="logo" src="img/logo.png" class="px-4">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="px-4 collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="px-2 nav-item">
          <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class=" px-2 nav-item">
          <a class="nav-link  text-white" href="Listing.php">Nos collections</a>
        </li>
        <li class="px-2  nav-item">
          <a class="nav-link text-white" href="apropos.php">Qui sommes-nous</a>
        </li>
        <li class="px-2  nav-item">
          <a class="nav-link text-white" href="#!">Nous contacter</a>
        </li>
        <li class="px-1 nav-item">
            <img class="taille" alt="logo" src="img/icon-search.png" onclick="recherch()"id="search">

<form name="formbarre">
<input type="text" name="barre" id="barre" placeholder= "Rechercher..." />

</form>
        </li>
      </ul>
     <ul class="px-4 navbar-nav mr-auto d">
       <li class="px-4 nav-item">
                    <a href="contact.php" class="stdetaile"> <img class="taille" alt="telephone" src="img/icon-phone.png"></a>
       </li>
       <li class="px-4 nav-item">
         <a href="contact.php" class="stdetaile">  <img class="taille" alt="utilisateur"src="img/icon-user.png"></a>
       </li>
       <li class="px-4 nav-item">
         <a href="panier.php" class="stdetaile">  <img class="taille" alt="panier"src="img/icon-basket.png"></a>
       </li>
     </ul>
    </div>
  </nav>
  </header>
