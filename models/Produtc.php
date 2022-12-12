<?php


class Product 
{
  public $id;
  public $name;
  public $brand;
  public $category;
  public $price;
  public $isAvailable;
  public $poster;

  /**
   * @param number $id
   * @param string $name
   * @param string $brand
   * @param string $category
   * @param number $price
   * @param boolean $isAvailable
   * @param string $poster
   */
public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_isAvailable, $_poster)
  {
      $this->id = $_id;
      $this->name = $_name;
      $this->brand = $_brand;
      $this->category = $_category;
      $this->price = $_price;
      $this->isAvailable = $_isAvailable;
      $this->poster = $_poster;
  }

  public function get_product_details() {
    return "Prodotto: $this->name, Marca: $this->brand";
  }
}