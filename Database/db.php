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
  new Food(27435, 'Small Croc', 'Golosi', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), 6.30, true, 'https://habitatzoo.com/2659-large_default/22132-golosi-dog-small-croc-kg2.jpg', 2, 'Pollo', 'Leggera e facilmente digeribile'),
  new Food(411011, 'Puppy', 'Together', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), 4.40, true, 'https://habitatzoo.com/3022-large_default/30377-together-dog-puppy-mini-pollo-800gr.jpg', 2, 'Pollo, Riso', 'Fonte naturale di Fibre '),
  new Food(5016, 'Natural', 'Trainer', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), 6.10, true, 'https://habitatzoo.com/3767-large_default/08713-trainer-bs-nat-cat-salmon-gr85.jpg', '0.85', 'Pollo, Suino, Pesce',
    'Alimento completo ed equilibrato per gatti adulti' ),
  new Food(604048, 'Kitten', 'Hills', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), 18.29, false, 'https://habitatzoo.com/2844-large_default/27659-hill-s-fel-kitten-pollo-kg15.jpg', 1.5, 'Pollo e tacchino', 'Supporta il sistema immunitario e una crescita sana nei
  gattini' )
  ];

  $accessories = [
    new Accessory(2134, 'Gipsy Trasportino', 'Croci', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), 8.67, true, 'https://habitatzoo.com/2520-large_default/21686-porta-lett-trendycat-fro-50x39x39.jpg', 'plastica', 'S'),
    new Accessory(98765, 'Guinz.Flexi', 'New Classic Cord', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), 9.60, true, 'https://habitatzoo.com/4444-large_default/06143-guinzflexi-new-classic-cord-xs-3m-rosso.jpg', 'plastica', 'XS' ),
    new Accessory(12567, 'Softy Style', 'Delta Collection', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), 34, true, 'https://habitatzoo.com/3113-large_default/24471-softy-style-delta-collection-55-cm.jpg', 'poliestere', 'M'),
  new Accessory(15425, 'Trasp. Cane', 'Road Runner', new Category('Cane', '<i class="fa-solid fa-dog"></i>'), 15.50, true, 'https://habitatzoo.com/2530-large_default/21588-trasp-cane-roadrunner-t101-cm51.jpg', 'plastica', 'M'),
  ];


// var_dump($products);