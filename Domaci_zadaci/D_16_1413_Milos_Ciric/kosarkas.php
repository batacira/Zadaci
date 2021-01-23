<?php
include_once "sportista.php";

class Kosarkas extends Sportista{
    private $poeni;
    
    //Konstruktor

    public function __construct($ime, $prezime, $godRod, $grRod, $poeni){
        parent::__construct($ime, $prezime, $godRod, $grRod);
        $this->setPoeni($poeni);
    }

    //Seter
    public function setPoeni($poeni){
        $this->poeni = $poeni;
    }
    //Geter
    public function getPoeni(){
        return $this->poeni;
    }

    public function ispisi(){
        echo "{$this->getIme()}, {$this->getPrezime()}, {$this->getGodRod()}, {$this->getGrRod()}, " . implode("," ,$this->getPoeni()) ."";
    }

}


?>