<?php
require_once 'Anfibio.php';
class Godzilla extends MonstruoAnfibio{
  
    public function __construct($nomb, $ataca, $debilidad, $ataque){
        $this->setAtaca($ataca);
        $this->setAtaque($ataque);
        $this->setDebilidad($debilidad);
        $this->strNombre = $nomb;
    }
    
  //Como hereda de una clase abstracta se tiene que implementar
  //el método abstracto 
    public function Ataca() {
        return "Godzilla Ataca con: ".$this->getAtaque();
    }

}