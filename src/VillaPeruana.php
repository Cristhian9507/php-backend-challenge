<?php

namespace App;

class VillaPeruana
{
  public $name;

  public $quality;

  public $sellIn;

  public function __construct($name, $quality, $sellIn)
  {
    $this->name = $name;
    $this->quality = $quality;
    $this->sellIn = $sellIn;
  }

  public static function of($name, $quality, $sellIn)
  {
    return new static($name, $quality, $sellIn);
  }

  public function tick()
  {
    if($this->name == "normal") {
      // Productos normales
      $productoNormal = new Normal($this->quality, $this->sellIn);
      $productoNormal->sell();
      $this->quality = $productoNormal->quality;
      $this->sellIn = $productoNormal->sellIn;
    } else if($this->name == "Pisco Peruano") {
      // El producto Pisco Peruano
      $piscoPeruano = new PiscoPeruano($this->quality, $this->sellIn);
      $piscoPeruano->sell();
      $this->quality = $piscoPeruano->quality;
      $this->sellIn = $piscoPeruano->sellIn;
    } else if($this->name == "Tumi de Oro Moche") {
      // El producto legendario Tumi
      $tumi = new Tumi($this->quality, $this->sellIn);
      $tumi->sell();
      $this->quality = $tumi->quality;
      $this->sellIn = $tumi->sellIn;
    } else if($this->name == "Ticket VIP al concierto de Pick Floid") {
      // El producto tickets vip del concierto Pink Floid
      $ticketsVip = new TicketVip($this->quality, $this->sellIn);
      $ticketsVip->sell();
      $this->quality = $ticketsVip->quality;
      $this->sellIn = $ticketsVip->sellIn;
    } else if($this->name == "Café Altocusco") {
      // El Café altocusco
      $altoCusco = new Altocusco($this->quality, $this->sellIn);
      $altoCusco->sell();
      $this->quality = $altoCusco->quality;
      $this->sellIn = $altoCusco->sellIn;
    }
  }
}
