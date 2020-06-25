<?php
include('header.php');
 ?>

     <nav class="navbar navbar-expand-lg  navbar-dark fixed-top navs" id="navbare">
  <img alt="logo"src="image/logo.png" class="px-4 ">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="px-4 collapse navbar-collapse" id="navbarText">
         <ul class="navbar-nav mr-auto">
           <li class="px-2 nav-item active">
             <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
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
               <img class="taille" alt="logo"src="image/rech.png" onclick="recherch()"id="imagerech">

  <form name="formbarre">
   <input type="text" name="barre" id="barre" placeholder= "recherche..." />

  </form>
           </li>
         </ul>
        <ul class="px-4  navbar-nav mr-auto d">
          <li class="px-4 nav-item">
             <span title="0625314587"> <a href="contact.php" class="stdetaile"> <img class="taille" alt="logo"src="image/telephone.png"></span></a>
          </li>
          <li class=" px-4 nav-item">
            <span title="connecter-vous"><a href="contact.php" class="stdetaile">  <img class="taille" alt="logo"src="image/user.png"></span></a>
         </li>
         <li class="px-4 nav-item">
          <span title="consulter-votre panier"><a href="panier.php" class="stdetaile"><img class="taille" alt="logo"src="image/panier.png"></span></a>
         </li>
        </ul>
       </div>
     </nav>


     <nav class="navbar navbar-expand-lg navbar-light " id="navbarmobile">
       <img src="image/logonoire.png"class="navbar-brand logomobilep"/>
       <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
         <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
           <li class="nav-item active">
             <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Nos collections</a>
           </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="#">Qui sommes-nous</a>
           </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="#">Nous contacter</a>
           </li>
         </ul>
         <ul class="px-4  navbar-nav mr-auto ">
           <li class="px-4 nav-item">
                        <a href="contact.php" class="stdetaile"> <img class="taille" alt="logo"src="image/telephone.png"> <p class="px-2 tlf">0625314587</p></a>
           </li>
           <li class=" px-4 nav-item">
             <a href="contact.php" class="stdetaile">  <img class="taille" alt="logo"src="image/user.png"><p class="px-2 tlf">connecter-vous</p></a>
           </li>
           <li class="px-4 nav-item">
             <a href="contact.php" class="stdetaile">  <img class="taille" alt="logo"src="image/panier.png"><p class="px-2 tlf">votre panier</p></a>
           </li>
         </ul>
       </div>
       <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon "></span>
       </button>
     </nav>

<header>
<!-- partie mobile-->

  <div class="container hedermobile">
    <div class=" row">
      <div class="col-sm-12 " >
        <h3 class="stickersmobiledetaille">Stickers<br>
Département 21 la Côte-d’Or</h3>
      </div>
    </div>
      <div class=" row">
      <div class="col-sm-4 ">
        <img src="image/matr1.png" alt="image sticker 21" id="imagestikcerdetaillemobile">
      </div>
      <div class="col-sm-4 ">
          <img src="image/controle.jpg" alt="slider aprés"id="imagecontroleapremobile">
      </div>
      <div class="col-sm-4 ">
          <img src="image/controle1.jpg" alt="slider avant" id="imagecontroleapremobileapr">
      </div>
    </div>
        <div class=" row">
      <div class="py-4 col-sm-6 "id="tailledepamobile2">
        <h3 id="departement21mobile">Département 21<br>
          La Seine et Marne</h3>

    </div>
    <div class="py-4 col-sm-6 " id="tailledepamobile">
      <h3 id="departement21mobile2">
Département 22<br>
Les Côtes d’armor</h3>

  </div>
  </div>
</div>

<div class="container hedermobile">
  <div class=" row">
    <div class="col-sm-4 " id="qdm">
            <h6 class="quantitemobiledetaille">Quantités:</h6>
    </div>
     <div class="col-sm-4 ndmobile" >
  <input class="numerodetaillemobile" type="text" id="text" value="1" size="3" readonly="true" style="background-color:#FFFFFF; border:#FFFFFF none 0px; font-size:9rem;">
      </div>
      <div class="col-sm-4 " >
          <div class="t ">
        <img  class="ta"  alt="cntrl1"src="image/fl1.jpg"  id="nbr" onClick="modifier(1);somme();"><br>
        <img class="taa" alt="cntrl2"src="image/fl2.jpg" onClick="modifier(-1)">
 </div>
      </div>
  </div>
    <div class=" row">
    <div class="col-sm-12 colprixmobile">

        <h2 class="prixdetaillemobile">PRIX :</h2>
          <input type="text" class="prdetaillemobile" id="totale" value="6,00€" size="3" readonly="true"  >

    </div>

  </div>
      <div class=" row">
    <div class="py-4 col-sm-12">
      <button class="brn" > <img src="image/panier.png"id="pz"/></button>
          </div>

  </div>
  <div class=" row">
<div class="py-4 col-sm-12 hn">
  <h2 class="prixdetaillemobileee">AUTOCOLLANT </h2><br>
    <h2 class="prixdetaillemobilee"> PLAQUE RESINE 21</h1>
      </div>
</div>
</div>
<div class="container-fluid textedetaillemobile">
<div class="row">
<div class="col-sm-12 textmbdt">
<p class="veritablemobile">Véritable sticker ou autocollant<br>
dome pour plaque<br>
d’immatriculation<br></p>
</div>
</div>
<div class="row">
<div class="col-sm-12 textmbdt">
Référence Bleu : D21B1<br>

État : Nouveau produit<br>
Haute Qualité, design actuel.<br>

Autocollant domé (résine),<br>
vinyle adhésif permanent,<br>
durée de vie 7 ans<br>


Blason officiel de la Côte-d’Or<br>

Le département de la<br>
Côte-d’Or<br>
(prononcé [kot.d‿ɔʁ ])<br>
est un département français<br>
parmi les quatre que compte<br>
la région Bourgogne.<br>
</div>
</div>
</div>




<div class="container hau1">
  <div class=" row">
    <div class="col-lg-4 text-right  quantite" >
      <h6 class="ditt">Quantités</h6>

      <input class="dss" type="text" id="text" value="1" size="3" readonly="true" style="background-color:#FFFFFF; border:#FFFFFF none 0px; text-align:center; font-size:30px">
 <div class="t ">
        <img  class="ta"  alt="cntrl1"src="image/fl1.jpg"  id="nbr" onClick="modifier(1);somme();"><br>
        <img class="taa" alt="cntrl2"src="image/fl2.jpg" onClick="modifier(-1)">
  </div>

    </div>
    <div class="col-lg-5 text-left prixsticker">
      <p class="de ">PRIX:</p>
        <input type="text" class="prix" id="totale" value="6,00€" size="3" readonly="true"  >
    </div>
    <hr>
    <div class="py-4 col-lg-2 text-left ">

<button class="brn" onclick="ouvrirFermerSpoiler();"id="az"><p id="textpanier">Ajouter au panier</p> <img src="image/panierr.png"id="panier"/></button>
    </div>
  </div>
</div>

<div class="py-4 container text-center g">
  <div class="row">
    <div class="py-4 col-lg-2 g1">

  <p id="departement11">Département <span id="numero1">20</span></p><br>
  <p id="nomdepa1" >La Seine et Marne</p>

  </div>
  <div class="col-lg-2">
      <img src="image/controle.jpg" alt="..." class="im" onclick="precedent()">
  </div>
    <div class="col-lg-4">

  <img src="image/3-DETAILS.jpg" alt="..." class="image1">
  <p class="ab">sickers</p><br>
  <p class="ab1">département <span id="departementttslider">21</span> <span id="nomdepa2">la Côte-d’Or</span></p>

  </div>
  <div class="col-lg-2">
        <img src="image/controle1.jpg" alt="..." class="im" onclick="suivant()">
  </div>

    <div class="py-4 col-lg-2 g1" >
  <p id="departementtslider">Département<span id="numero2"> 22</span></p><br>
  <p id="nomdepa3">Les côtes d'armor</p>
  </div>
  </div>
  </div>

<div class="container-fluid noire">

  <div class="row v">
    <div class="col-lg-12">
      <img src="image/logo.png" alt="..."class="log" >
    </div>
  </div>

  <div class="row v">
    <div class="col-lg-12">
      <div class=" contexte">
        <div class="container">
          <div class="row">
            <div class="col-lg-10">
              <h2 class="da">AUTOCOLLANT PLAQUE RESINE 21</h2>
              <h6 class="dee">Véritable sticker  ou autocollant dome pour plaque d’immatriculation</h6>
              <div class="row">
                <div class="col-lg-7">
                  <p class="ma">
                     État :<span class="gr"> Nouveau produit</span><br>

                     Référence Bleu :<span class="gr"> D21B1</span><br>

                     Haute Qualité, design actuel.<br>

                    Autocollant domé (résine),<br>
                    vinyle adhésif permanent,<br>
                    durée de vie 7 ans</p>
                </div>
                <div class="col-lg-5">
                <p class="maa">
                Blason officiel de la Côte-d’Or<br>
                Le département de la Côte-d’Or<br>
                (prononcé [kot.d‿ɔʁ ])<br>
                est un département français<br>
                parmi les quatre que compte la<br>
                région Bourgogne.
              </p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                </div>
              </div>

            </div>
            <div class="col-lg-2">
                  <img src="image/matr1.png" alt="..." class="im22">
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="cadre">
        <h2 class="vous">Vous aimerez aussi</h2>
        <hr>

        <div class="cadregris">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
      <!--  <img src="image/backgroundop.jpg" alt="image de categorie2" class=" d" />
            <img src="image/imm1.png" alt="image de categori1" class="pre1"onmouseover="this.src='image/backgroundop.jpg'" onmouseout="this.src='image/imm1.png'" /> -->
            <div class="des">
              <img src="image/imm1.png" class="pre1">
            <div class="overlay">
              <div class="py-4 text">STICKER</div><br>
                <div class="py-4 textt">6€</div><br>
                <div class="py-4 texttt">
                  <h3 class="voir"><a href="dettail.php" class="stdetaile">Voir le produit</a></h3>
                </div>
                  <hr>
            </div>

          </div>

        </div>

<div class="col-lg-4">
  <div class="des">
    <img src="image/matr2.png" class="pre1">
  <div class="overlay">
    <div class="py-4 text">STICKER</div><br>
      <div class="py-4 textt">9€</div><br>
      <div class="py-4 texttt"><h3 class="voir"><a href="dettail.php" class="stdetaile">Voir le produit</a></h3></div>
        <hr>
  </div>

</div>
</div>
<div class="col-lg-4">
  <div class="des">
    <img src="image/matr3.png" class="pre1">
  <div class="overlay">
    <div class="py-4 text">STICKER</div><br>
      <div class="py-4 textt">8€</div><br>
      <div class="py-4 texttt"><h3 class="voir"><a href="dettail.php" class="stdetaile">Voir le produit</a></h3></div>
        <hr>
  </div>

</div>
</div>
</div>
</div>
</div>

      </div>
    </div>
  </div>
</div>

<div class="container-fluid imagefindetaille">
  <div class="row vmmobile">
  <div class="col-sm-12">
  <h3 class="abmobile">Stickers<br></h3>
  <h3 class="ab1mobile">Département 21 la Côte-d’Or</h3>
</div>
  </div>
  <div class="row">
  <div class="col-sm-12">
<img src="image/imm1.png" alt="" class="imageimm1mobile" >
<div class="carousselmobile">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block  fmobile" src="image/de.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block fmobilee" src="image/imm1.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block fmobilee" src="image/matr3" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  </div>
</div>

 <?php
 include('footer.php');
  ?>
