<?php

class Category 
{
  public $name;
  public $icon;

  /**
   * @param string $name
   * @param string $icon
   */
  public function __construct($_name, $_icon = null )
  {
    $this->name = $_name;
    $this->icon = $_icon;
  }
}


