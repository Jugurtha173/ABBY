var article = document.querySelectorAll('.article');
var upper = document.querySelector('#upper');

// Tout les articles (qui sont des <li> dans le html), doivent avoir comme attribut:  data-toggle:"modal" et  data-target:"#exampleModal"
// pour que quand on clique sur chacun, le pop-up (modal) s'affiche.
// DONC on a fait une boucle qui parcour chaque article et lui ajoute les attributs.
article.forEach(article => {
  article.setAttribute('data-toggle' , 'modal');
  article.setAttribute('data-target' , '#exampleModal');  
});

// Faire apparaitre et disparaitre le bouton pour remonter en haut de la page selon notre positionnement dans la fenêtre.
window.addEventListener('scroll', () => {
  if(window.pageYOffset > 500) upper.style.display = "block";
  else upper.style.display = "none";
} );

// L'effet du bouton
upper.addEventListener('click', () => {
  window.scrollTo({
    top : 0,
    letf : 0,
    behavior : "smooth"
  });
});