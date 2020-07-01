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
          <img src="./img/slide-enfant_1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>MINI MODE</h5>
            <p>Parce qu'ils sont vos enfants, alors ils meritent le meilleur.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/slide-enfant_2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>FASHION KIDS</h5>
            <p>Parce que le bonheur leur va si bien.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/slide-enfant_3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>LA VIE EN JEAN</h5>
            <p>Pour les accompagner au quotidien, ils ont besoin d'un fidèle partenaire, un bon jean.</p>
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
         <li class="article"id="pull1"> <img src="./img/kid (4).jpg" alt="Article 1" >   <div class="info"> <span class="nom_produit">Purple Dress</span>    <span class="categorie">Dress</span> <span class="price">19.99</span>   </div> </li>
         <li class="article"id="pull2"> <img src="./img/kid (6).jpg" alt="Article 2">   <div class="info"> <span class="nom_produit">Baby Blue</span>    <span class="categorie">Jacket</span> <span class="price">25</span>   </div> </li>
         <li class="article"id="pull3"> <img src="./img/kid (10).jpg" alt="Article 3">   <div class="info"> <span class="nom_produit">Olive Green</span>    <span class="categorie">T-shirt</span> <span class="price">15.30</span>   </div> </li>
         <li class="article"id="pull1"> <img src="./img/kid (4).jpg" alt="Article 1" >   <div class="info"> <span class="nom_produit">Purple Dress</span>    <span class="categorie">Dress</span> <span class="price">19.99</span>   </div> </li>
         <li class="article"id="pull2"> <img src="./img/kid (6).jpg" alt="Article 2">   <div class="info"> <span class="nom_produit">Baby Blue</span>    <span class="categorie">Jacket</span> <span class="price">25</span>   </div> </li>
         <li class="article"id="pull3"> <img src="./img/kid (10).jpg" alt="Article 3">   <div class="info"> <span class="nom_produit">Olive Green</span>    <span class="categorie">T-shirt</span> <span class="price">15.30</span>   </div> </li>
      </ol>
   </ul>    
         
   <ul class="pantalon">
      <h2>PANTALONS</h2>
      <ol class="articles">
            <li class="article"id="pantalon1"><img src="./img/kid (7).jpg" alt="Article 1">    <div class="info"> <span class="nom_produit">Deep Grey</span>    <span class="categorie">Survetement</span> <span class="price">30</span>   </div>  </li>
            <li class="article"id="pantalon2"><img src="./img/kid (11).jpg" alt="Article 2">   <div class="info"> <span class="nom_produit">White Street</span>    <span class="categorie">Jean</span> <span class="price">39.99</span>   </div>  </li>
            <li class="article"id="pantalon3"><img src="./img/kid (2).jpg" alt="Article 3">   <div class="info"> <span class="nom_produit">Bois De Rose</span>    <span class="categorie">Jean</span> <span class="price">18.99</span>   </div>  </li>
      </ol>
   </ul>  

   <ul class="chaussure">
      <h2>CHAUSSURES</h2>
      <ol class="articles">
         <li class="article"id="chaussure1"><img src="./img/kid (1).jpg" alt="Article 1">   <div class="info"> <span class="nom_produit">Map</span>    <span class="categorie">Sneaker</span> <span class="price">45</span>   </div>   </li>
         <li class="article"id="chaussure2"><img src="./img/kid (8).jpg" alt="Article 2">  <div class="info"> <span class="nom_produit">Girly</span>    <span class="categorie">Kids Boot</span> <span class="price">50.99</span>   </div>   </li>
         <li class="article"id="chaussure3"><img src="./img/kid (9).jpg" alt="Article 3">  <div class="info"> <span class="nom_produit">Bad Boy</span>    <span class="categorie">Kids Boot</span> <span class="price">50.99</span>   </div>   </li>      
      </ol>
   </ul>  

   <img id="upper" src="./img/arrow-alt-circle-up-solid.svg" alt="Revenir en haut">
 
   <?php include 'utilitaires/footer.php'; ?>
         
   <?php include 'utilitaires/modal.php'; ?>
   
  <script type="text/javascript" src="./js/app.js"></script>


</body>
</html>
