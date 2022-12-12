<?php

class Food extends Product 
{
  public $weight;
  public $ingredients;
  public $taste;


  /**
   * @param number $weight
   * @param string $ingredients
   * @param string $taste
   */
  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_isAvailable, $_poster, $_weight, $_ingredients, $_taste)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_isAvailable, $_poster);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
    $this->taste = $_taste;
  }
}