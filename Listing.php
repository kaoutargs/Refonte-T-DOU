<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="favicontdou">
    <link rel="shortcut icon" type="image/x-icon" href="favicontdou.png">
    <title>Liste</title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styledimitri.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>

  </head>
  <body>

<!-- Navbar -->

    <nav class="essai navbar navbar-expand-lg  navbar-dark fixed-top " id="navbar">
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
                <img class="taille" alt="logo" src="img/loupe.png" onclick="recherch()"id="search">

    <form name="formbarre">
    <input type="text" name="barre" id="barre" placeholder= "Rechercher..." />

    </form>
            </li>
          </ul>
         <ul class="px-4  navbar-nav mr-auto d">
           <li class="px-4 nav-item">
                        <a href="contact.php" class="stdetaile"> <img class="taille" alt="telephone" src="img/tel.png"></a>
           </li>
           <li class=" px-4 nav-item">
             <a href="contact.php" class="stdetaile">  <img class="taille" alt="utilisateur"src="img/user.png"></a>
           </li>
           <li class="px-4 nav-item">
             <a href="contact.php" class="stdetaile">  <img class="taille" alt="panier"src="img/panier.png"></a>
           </li>
         </ul>
         <script language="javascript">

         function recherch() {
               document.getElementById("search").style.display = "none";
               document.getElementById("barre").style.display = "block";
               var span = document.getElementById('navbar') // L'élément du DOM
         span.style.fontSize = '15px' // Font-size à 15px
             }

         </script>
        </div>
      </nav>

      <!-- Accordéon -->

    <div class="accordian">
    	<ul>
    		<li>
    				<img src="img/sticker-tdou-ass.png" alt="stickers de saint étienne">
            <p class="stikéquipe"> STICKERS AS SAINT <br>ETIENNE</p>
            <p class="prix"> 6€</p>
            <p class="produit">VOIR LE PRODUIT</p>
    		</li>

    		<li>
    				<img src="img/sticker-tdou-ol.png" alt="stickers de l'olympique lyonnais">
            <p class="stikéquipe"> STICKERS OLYMPIQUE <br>LYONNAIS</p>
            <p class="prix"> 6€</p>
            <p class="produit">VOIR LE PRODUIT</p>
    		</li>

    		<li>
    				<img src="img/sticker-tdou-om.png" alt="stickers l'olympique de marseille">
            <p class="stikéquipe"> STICKERS OLYMPIQUE <br>DE MARSEILLE</p>
            <p class="prix"> 6€</p>
            <p class="produit">VOIR LE PRODUIT</p>
    		</li>

    		<li>
    				<img src="img/sticker-tdou-psg.png" alt="stickers du psg">
            <p class="stikéquipe"> STICKERS PARIS SAINT<br> GERMAIN</p>
            <p class="prix"> 6€</p>
            <p class="produit">VOIR LE PRODUIT</p>
    		</li>

    	</ul>
    </div>

    <!-- 2ème Navbar -->

    <nav class="essai2">
    <a class="textenav" href="FOOTBALL">FOOTBALL</a>
    <a class="textenav" href="RUGBY">RUGBY</a>
    <a class="textenav" href="BASKETBALL">BASKETBALL</a>
    <a class="textenav" href="HANDBALL">HANDBALL</a>
    </nav>

    <!-- Partie listing -->

<div class="container-fluid">
      <img src="img/bmw-listing.png" alt="photo bmw">
  <div class="présentation">
      <h2 class="titre2">VERITABLE STICKERS POUR PLAQUE D'IMMATRICULATION</h2>

      <h4 class="titre4">Autocollant simple, vinyle adhésif permanent, durée de vie 7 ans.</h4>
  </div>

    <!-- Cartes Lyon-->

    <div class="carteslyon">
      <ul>
        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>

        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>

        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>

        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>


        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>


        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>


        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>


        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>


        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>


        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>


        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>


        <li>
          <img src="img/carte-lyon.png" alt="carte de lyon" class="imglyon">
          <div class="overlay pls">
            <div class="sticker">STICKER OLYMPIQUE LYONNAIS</div>
            <div class="euros">6€</div>
            <div class="produit2">VOIR LE PRODUIT</div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div>
<p class="findepage1">1</p>
<p class="findepage2">2</p>
<p class="findepage3">3</p>
<p class="findepage">...</p>
<p class="findepage7">7</p>

</div>





  </body>


</html>
