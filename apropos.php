<?php include 'header.php' ?>

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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
