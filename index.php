<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L’e-commerce vende **prodotti** per animali.
- I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Allego lo schema fatto in classe (da considerarsi a titolo indicativo ma potete personalizzare come credete)
 -->

 <?php

  include_once './models/Produtc.php';
  include_once './models/Category.php';
  include_once './models/Accessory.php';
  include_once './models/Food.php';
  include_once './models/Toy.php';



  $food1 = new Food(123, 'Crocchette', 'Rocky Cat', new Category('Gatto'), 12, True, null, 200, 'Pesce', 'normale');

  var_dump($food1);

?>


