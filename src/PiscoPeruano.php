<?php

namespace App;

class PiscoPeruano
{
  public $name;
  public $quality;
  public $sellIn;

  public function __construct($quality, $sellIn)
  {
    $this->name = "Pisco Peruano";
    $this->quality = $quality;
    $this->sellIn = $sellIn;
  }

  public static function of($quality, $sellIn)
  {
    return new static($quality, $sellIn);
  }

  public function sell() {
    if($this->quality < 50) {
      $this->quality = $this->quality + 1;

      if($this->sellIn <= 0) {
        $this->quality = $this->quality + 1;
      }
    }
    $this->quality = $this->quality > 50 ? 50 : $this->quality;
    $this->sellIn = $this->sellIn - 1;
  }
}