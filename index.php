<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L’e-commerce vende **prodotti** per animali.
- I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Allego lo schema fatto in classe (da considerarsi a titolo indicativo ma potete personalizzare come credete)
 -->

 <?php


  //db
  require_once __DIR__ . '/Database/db.php';


  // views
  require_once __DIR__ . '/Views/layout/head.php';require_once __DIR__ . '/Views/layout/header.php'; require_once __DIR__ . '/Views/partials/pet.php';
  require_once __DIR__ . '/Views/layout/footer.php';
 

  ?>




