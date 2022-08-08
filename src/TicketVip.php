<?php

namespace App;

class TicketVip
{
  public $name;
  public $quality;
  public $sellIn;

  public function __construct($quality, $sellIn)
  {
    $this->name = "Tickets VIP";
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
      
      // Si faltan 10 o menos días para que expire sus días de venta, aumenta en dos su quality (1 quality ya fue sumado anteriormente)
      if($this->sellIn <= 10) {
        $this->quality = $this->quality + 1;
      }
      // Si faltan 3 o menos días para que expire sus días de venta, aumenta en dos su quality (2 quality ya fue sumado anteriormente)
      if($this->sellIn <= 5) {
        $this->quality = $this->quality + 1;
      }

      if($this->sellIn <= 0) {
        $this->quality = 0;
      }
    }
    $this->quality = $this->quality > 50 ? 50 : $this->quality;
    $this->sellIn = $this->sellIn - 1;
  }
}