<?php
    // connection à la BDD
    $bdd = new PDO("mysql:host=localhost;dbname=abby;port=3308", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    function affiche_produit($categorie, $genre){
        $requete = $GLOBALS['bdd']->prepare('SELECT * FROM produit WHERE partie = ? AND genre = ?');
        $requete->execute(array($categorie, $genre));
        while($donnees = $requete->fetch()){           
            echo "<li class='article' id='".$donnees['id']."'> <img src='./img/".$donnees['image']."'>   <div class='info'> <span class='nom_produit'>".$donnees['libelle']."</span>    <span class='categorie'>".$donnees['categorie']."</span> <span class='price'>".$donnees['prix']."</span>   </div> </li>";
        }
    }
?>