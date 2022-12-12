<?php

//models
require_once __DIR__ . './../Models/Produtc.php';
require_once __DIR__ . './../Models/Category.php';
require_once __DIR__ . './../Models/Accessory.php';
require_once __DIR__ . './../Models/Food.php';
require_once __DIR__ . './../Models/Toy.php';


  // var_dump($food1);

  // var_dump($food1->get_product_details());


$products = [
  new Product(34990, 'Sterilised', 'Prolife',new Category('Cani'), 37, true, 'https://habitatzoo.com/2450-large_default/23462-prolife-dog-st-sens-porrice-mini-kg7.jpg' ),
  new Product(27435, 'Small Croc', 'Golosi', new Category('Cani'), 6.30, true, 'https://habitatzoo.com/2659-large_default/22132-golosi-dog-small-croc-kg2.jpg' ), 
  new Product(34990, 'Sterilised', 'Prolife', new Category('Cani'), 37, true, 'https://habitatzoo.com/2450-large_default/23462-prolife-dog-st-sens-porrice-mini-kg7.jpg'),
  new Product(27435, 'Small Croc', 'Golosi', new Category('Cani'), 6.30, true, 'https://habitatzoo.com/2659-large_default/22132-golosi-dog-small-croc-kg2.jpg')
  ];


// var_dump($products);