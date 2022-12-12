<?php

class Toy extends Product
{
  public $feature;
  public $size;

  /**
   * @param string $feature
   * @param number $size
   */
  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_isAvailable, $_poster, $_feature, $_size)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_isAvailable, $_poster);

    $this->feature = $_feature;
    $this->size = $_size;
  }
}