<?php
    // connection à la BDD
    $bdd = new PDO("mysql:host=localhost;dbname=abby;port=3308", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    function affiche_produit($categorie){
        $requete = $GLOBALS['bdd']->prepare('SELECT * FROM produit WHERE partie = ? ');
        $requete->execute(array($categorie));
        while($donnees = $requete->fetch()){           
            echo "<li class='article' id='".$donnees['id']."'> <img src='./img/".$donnees['image']."'>   <div class='info'> <span class='nom_produit'>".$donnees['libelle']."</span>    <span class='categorie'>".$donnees['categorie']."</span> <span class='price'>".$donnees['prix']."</span>   </div> </li>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="./img/abby_icon.png">
    
    <link rel="stylesheet" href="./fontawesome-pro-5.8.2-web/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">

    <script type="text/javascript" src="./bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="./bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <title>ABBY</title>

</head>
<body>

  <?php include 'utilitaires/header.php'; ?>

  <?php include 'utilitaires/nav.php'; ?>

   <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/tenu.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>TENU SPORT</h5>
            <p>Amatteur de running, cette ensemble est faite pour vous.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/nouvel_arrivage.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>NOUVEL ARRIVAGE</h5>
            <p>Découvrez nos nouvelle chaussures.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/costard1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>L'ART DU SUR MESURE</h5>
            <p>Besoin d'élégance ? Nos plus beaux costards à votre disposition.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
   </div>

   <ul class="pull">
      <h2>HAUTS</h2>
      <ol class="articles">
         <?php
         affiche_produit("haut"); 
         ?>
      </ol>
   </ul>
         
   <ul class="pantalon">
      <h2>PANTALONS</h2>
      <ol class="articles">
         <?php
         affiche_produit("pantalon"); 
         ?>
      </ol>
   </ul>  

   <ul class="chaussure">
      <h2>CHAUSSURES</h2>
      <ol class="articles">
         <?php
         affiche_produit("chaussure"); 
         ?>
      </ol>
   </ul>  

   <img id="upper" src="./img/arrow-alt-circle-up-solid.svg" alt="Revenir en haut">
 
   <?php include 'utilitaires/footer.php'; ?>
         
   <?php include 'utilitaires/modal.php'; ?>

   <script type="text/javascript" src="./js/app.js"></script>


</body>
</html>