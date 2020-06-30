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
          <img src="./img/slide_femme_1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>SUNSHINE</h5>
            <p>Nos plus belles tenues conçus pour vous faire briller de mille feux.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/slide_femme_2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>BLACK FRIDAY</h5>
            <p>Profitez ! Des soldes jusqu'à -50%.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/slide_femme_3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>NOUVELLE COLLECTION</h5>
            <p>les indispensables d'une garde robe.</p>
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
       
            <li class="article"id="pull1"> <img src="./img/haut_femme_1.jpg" alt="Article 1" >   <div class="info"> <span class="nom_produit">Prince de Galles</span>    <span class="categorie">Coat</span> <span class="price">150.50</span>   </div> </li>
            <li class="article"id="pull2"> <img src="./img/tenu_femme (12).jpg" alt="Article 2">   <div class="info"> <span class="nom_produit">Little Coffee</span>    <span class="categorie">Woolen Sweater</span> <span class="price">70</span>   </div> </li>
            <li class="article"id="pull3"> <img src="./img/haut_femme_2.jpg" alt="Article 3">   <div class="info"> <span class="nom_produit">So Print</span>    <span class="categorie">Coat</span><span class="price">90</span>   </div> </li>
        </ol>
    </ul>    
           
           <ul class="pantalon">
            <h2>BAS</h2>
            <ol class="articles">
           

                <li class="article"id="pantalon1"><img src="./img/tenu_femme (7).jpg" alt="Article 1">    <div class="info"> <span class="nom_produit">Modern Art</span>    <span class="categorie">Skirt</span> <span class="price">22.22</span>   </div>  </li>
                <li class="article"id="pantalon2"><img src="./img/tenu_femme (10).jpg" alt="Article 2">   <div class="info"> <span class="nom_produit">80's</span>    <span class="categorie">Jean</span> <span class="price">30</span>   </div>  </li>
                <li class="article"id="pantalon3"><img src="./img/tenu_femme (1).jpg" alt="Article 3">   <div class="info"> <span class="nom_produit">Hera</span>    <span class="categorie">Dress</span> <span class="price">50.55</span>   </div>  </li>
            </ol>
        </ul>  

        <ul class="chaussure">
            <h2>CHAUSSURES</h2>
            <ol class="articles">
           

                <li class="article"id="chaussure1"><img src="./img/she.JPG" alt="Article 1">   <div class="info"> <span class="nom_produit">Blossom</span>    <span class="categorie">Heel</span> <span class="price">30</span>   </div>   </li>
                <li class="article"id="chaussure2"><img src="./img/snk.PNG" alt="Article 2">  <div class="info"> <span class="nom_produit">Rush</span>    <span class="categorie">Sneaker</span> <span class="price">89.99</span>   </div>   </li>
                <li class="article"id="chaussure3"><img src="./img/chaussure_femme _1.jpg" alt="Article 3">  <div class="info"> <span class="nom_produit">Spring</span>    <span class="categorie">Heel</span> <span class="price">22.22</span>   </div>   </li>
                
            </ol>
        </ul>  

  

        <a id="upper"  href="#begin"><img src="./img/arrow-alt-circle-up-solid.svg" alt=""></a>
   
    <?php include 'utilitaires/footer.php'; ?>

    <?php include 'utilitaires/modal.php'; ?>
    
    <script type="text/javascript" src="./js/app.js"></script>


</body>
</html>
