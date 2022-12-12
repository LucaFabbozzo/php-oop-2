<?php

//models
require_once __DIR__ . './../Models/Produtc.php';
require_once __DIR__ . './../Models/Category.php';
require_once __DIR__ . './../Models/Accessory.php';
require_once __DIR__ . './../Models/Food.php';
require_once __DIR__ . './../Models/Toy.php';


  // var_dump($food1);

  // var_dump($food1->get_product_details());


$foods = [
  new Food(27435, 'Small Croc', 'Golosi', new Category('Cani'), 6.30, true, 'https://habitatzoo.com/2659-large_default/22132-golosi-dog-small-croc-kg2.jpg', 2, 'Pollo', 'Leggera e facilmente digeribile'),
  new Food(411011, 'Puppy', 'Together', new Category('Cani'), 4.40, true, 'https://habitatzoo.com/3022-large_default/30377-together-dog-puppy-mini-pollo-800gr.jpg', 2, 'Pollo, Riso', 'Fonte naturale di Fibre '),
  new Food(5016, 'Natural', 'Trainer', new Category('Gatti'), 6.10, true, 'https://habitatzoo.com/3767-large_default/08713-trainer-bs-nat-cat-salmon-gr85.jpg', '0.85', 'Pollo, Suino, Pesce',
    'Alimento completo ed equilibrato per gatti adulti' )
  ];

  $accessories = [
    new Accessory(2134, 'Gipsy Trasportino', 'Croci', new Category('Gatti'), 8.67, true, 'https://arcaplanet.vtexassets.com/arquivos/ids/261414/GIPSY_AZZURRO-copia.jpg?v=1757207738', 'plastica', 'S'),
    new Accessory(98765, 'Tiragraffi', 'Badalona', new Category('Gatti'), 50, true, 'https://arcaplanet.vtexassets.com/arquivos/ids/223801/trixie-gatto-tiragraffi-badalona-beige.jpg?v=1757121092', 'Peluche', 'L' )
  ];


// var_dump($products);