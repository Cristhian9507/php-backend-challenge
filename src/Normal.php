<?php

namespace App;

class Normal
{
  public $name;
  public $quality;
  public $sellIn;

  public function __construct($quality, $sellIn)
  {
    $this->name = "Producto normal";
    $this->quality = $quality;
    $this->sellIn = $sellIn;
  }

  public static function of($quality, $sellIn)
  {
    return new static($quality, $sellIn);
  }

  public function sell()   {
    if($this->quality > 0) {
      $this->quality = $this->quality - 1;
    }

    if($this->sellIn < 1 && $this->quality > 0) {
      $this->quality = $this->quality - 1;
    }
    $this->quality = $this->quality < 0 ? 0 : $this->quality;
    $this->sellIn = $this->sellIn - 1;
  }
}