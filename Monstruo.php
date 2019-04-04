<?php
class Monstruo{
    public $strNombre;
    private $bitAtaca;
    protected $strDebilidad;
    
    public function setAtaca($bolBandera){
  	$this->bitAtaca = $bolBandera;
        //$this.bitAtaca = $bolBandera;
    }
  
    public function getAtaca(){
  	return $this->bitAtaca;
    }
  
    public function setDebilidad ($strAtributo){
  	$this->strDebilidad = $strAtributo;
    }
  
    public function getDebilidad(){
  	return $this->strDebilidad;
    }
}
