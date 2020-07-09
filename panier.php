<?php
include('header.php');
 ?>
 <link rel="stylesheet" href="stylerajae.css">


 <div class="container-fluid">
   <div class="row margtitre">
     <div class="col-lg-12">
       <h1 class="titrerecapitulatif cacherpanier2">RÉCAPITULATIF DE LA COMMANDE</h1>
       <!-- ***********************tire recaputilatife pour partie mobile*************************************************-->
       <h1 class="titrerecapitulatife bla">RECAPITULATIF DE</h1><br>
       <h1 class="titrerecapitulatife bla">LA COMMANDE</h1>
       <!-- ***************************************fin titre************************************************************-->
     </div>
   </div>
 </div>
 <!-- ********************************************* menu de recapitilatif connexion de panier****************************-->
 <div class="container-fluid navbar2">
           <div class="row">
             <div class="col-lg-3 col-sm-12 col1">
               <h3 class="recapitulatif">  Récapitulatif  <span class="flech py-4">></span><h3>
             </div>
             <div class="col-lg-2 cacherelemntpanier" id="menu2panier">
               <h3 class="connexionmenu" id="Connexionpanier" >Connexion<span class="flech1 py-4">></span></h3>

             </div>
             <div class="col-lg-2 cacherelemntpanier col11" id="menupanier1">
               <h3 class="recapitulatifjs" id="Connexionpanier" >Connexion<span class="flech py-4">></span></h3>

             </div>

             <div class="col-lg-2 cacherelemntpanier"id="menu2panier">
               <h3 class="connexionmenu">Adresse <span class="flech1 py-4">></span></h3>
             </div>
             <div class="col-lg-2 cacherelemntpanier col1" id="menupanier1">
               <h3 class="recapitulatifjs" id="Connexionpanier" >Adresse<span class="flech py-4">></span></h3>

             </div>
             <div class="col-lg-2 cacherelemntpanier">
               <h3 class="connexionmenu">Livraison<span class="flech1 py-4">></span></h3>
             </div>
             <div class="col-lg-3 cacherelemntpanier ">
               <h3 class="position1">Paiement</h3>
             </div>
           </div>
 </div>
 <!-- ************************************ partie de l-img et overlay **************************************-->
            <div class="container-fluid traitpanierfn ">
                      <div class="row">
                        <div class="col-lg-3 ">
                          <div class="dess">

                            <img src="img/imm1.png" class="pre1panier">
 <!-- ************************************* img pour la pertie mobile d'overlay **************************-->
                             <img src="img/matr1.png" class="pre1mobile">
 <!-- ***************************************fin img mobile *********************************************-->
                           <div class="overlayp">
                            <div class="py-4 textsticker">STICKER</div><br>
                            <div class="py-4 texttp">6€</div><br>
                            <div class="py-4 textttp"><h3 class="voir"><a href="dettail.php" class="stdetailee">Voir le produit</a></h3></div>
                               <hr>
                           </div>
                        </div>
                       </div>
                       <div class="col-lg-5 vermobile">
                          <h3 class="autocollant">AUTOCOLLANT PLAQUE RESINE 21</h3>
                          <!-- *************************************** texte just pour partie mobile *******************-->
                          <h3 class="autocollanteresine">AUTOCOLLANT PLAQUE </h3><h3 class="autocollanteresine">RESINE 21</h3>
                          <img class="btnsuppmobile" alt="cntrl2"src="img/supp.png" onClick="supprimer">
                          <!-- *************************************** fin parti emobile ***************************-->
                          <h6 class="reference referencemobile">Référence Bleu :<span class="gr"> D21B1<span></h6>
                          <p class="reference  ">6,00 €</p>
                      </div>
                        <div class="col-lg-4 ">
                          <div class="row laquantite">
                           <div class="col-lg-6">
                            <h6 class="autocollante qte">Qté</h6>
                             <!-- *************************************** texte just pour partie mobile *******************-->
                            <h6 class="autocollanteresinemobile">Quantités:</h6>
                            <!-- *************************************** fin parti emobile ***************************-->
                          </div>
                          <div class="col-lg-6">
                             <h6 class="autocollante totaledesctop">Total produit</h6>
                             <h6 class=" totalepromobile">Total produit:</h6>
                          </div>
                           <hr>
                        </div>
                        <div class="row">
                        <div class="col-lg-5 numbermobile">
                          <input class="dsss afpn" type="text" id="text" value="1" size="3" readonly="true" style="background-color:#FFFFFF; border:#FFFFFF none 0px; text-align:center; font-size:30px;margin-left: -50px;margin-top:2rem;position:absolute;">
                            <input class="dsss bfpn" type="text" id="text" value="1" size="3" readonly="true" style="background-color:#FFFFFF; border:#FFFFFF none 0px; text-align:center; font-size:30px;margin-left: -50px;margin-top:5rem;position:absolute;">
                       <div class="tpanierr tpaniermobile ">
                              <img  class="tapanier tapaniermobile"  alt="cntrl1"src="img/fl1.jpg"  id="nbr" onClick="modifier(1);somme();"><br>
                              <img class="taapanier taapaniermobile" alt="cntrl2"src="img/fl2.jpg" onClick="modifier(-1)">
                        </div>
                        </div>
                        <div class="col-lg-5">
                            <input type="text" class="prixpanier prixpaniermobile" id="totale" value="6,00€" size="3" readonly="true"  >
                        </div>
                        <div class="col-lg-2">
                              <img class="btnsupp" alt="cntrl2"src="img/supp.png" onClick="supprimer">
                        </div>
                      </div>
                     </div>
                   </div>
             </div>
             <div class="container-fluid  ">
                       <div class="row">
                         <div class="col-lg-6 imgachat">
                            <img class="visamobile" alt="cntrl2"src="img/visa.png" onClick="commander">
                            <img class="threed" alt="cntrl2"src="img/3d.png" onClick="commander">
                            <img class="visa" alt="cntrl2"src="img/visa.png" onClick="commander">
                            <img class="paypal" alt="cntrl2"src="img/paypal.png" onClick="commander">
                          </div>
                         <div class="col-lg-6 totalesimobile">
                           <h3 class="totalepanierfn totalepanierfnmobile">Total: <span class="prixpanierfn">6,00€</span></h3>
                         </div>
                      </div>
                      <div class="row">
                       <div class="col-lg-8 ">
                       </div>
                      <div class="col-lg-4 ">
                       <div class="btnmobile">
                           <button class="boutonpaniercommander" onclick="menu1panierdesctop()" id="btncommanderpanier"><p class="textepaniere">Commander</p>
                          </button>
                          <button class="boutonpaniercommander" onclick="menu2panierdesctop()" id="btnconnexionpanier"><p class="textepaniere">Connexion</p>
                         </button>
                         <button class="boutonpaniercommander" onclick="menu3panierdesctop()" id="btnadressepanier"><p class="textepaniere">valider</p>
                        </button>
                       </div>
                     </div>
                   </div>
                 </div>

 <?php
 include('footer.php');
  ?>
