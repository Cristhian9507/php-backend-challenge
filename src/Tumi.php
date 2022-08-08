<?php

namespace App;

class Tumi
{
  public $name;
  public $quality;
  public $sellIn;

  public function __construct($quality, $sellIn)
  {
    $this->name = " Tumi de Oro Moche";
    $this->quality = $quality;
    $this->sellIn = $sellIn;
  }

  public static function of($quality, $sellIn)
  {
    return new static($quality, $sellIn);
  }

  public function sell() {
    $this->quality = $this->quality;
    $this->sellIn = $this->sellIn;
  }
}