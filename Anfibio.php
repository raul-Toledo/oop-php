<?php
require_once 'Monstruo.php';
abstract class MonstruoAnfibio extends Monstruo{
    private $strAtaquePpal;
  //los metodos abstractos NO SE IMPLEMENTAN
    public abstract function Ataca();
  
    public function setAtaque($strAtributo){
  	$this->strAtaquePpal = $strAtributo;
    }
    
    public function getAtaque(){
        return $this->strAtaquePpal;
    }
}


