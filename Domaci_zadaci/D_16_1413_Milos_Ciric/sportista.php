<?php

//  Napraviti klasu Sportista, koja ima atribute:
//  ime
//  prezime
//  godina rođenja
//  grad rođenja.


// Napraviti klasu Košarkaš koja ima atribute:
//  ime
//  prezime
//  godina rođenja
//  grad rođenja
//  poeni (niz poena koje je postizao na utakmicama).


class Sportista {

    private $ime;
    private $prezime;
    private $godRod;
    private $grRod;

    //Konstruktor

    public function __construct($ime, $prezime, $godRod, $grRod){
        $this->setIme($ime);
        $this->setPrezime($prezime);
        $this->setGodRod($godRod);
        $this->setGrRod($grRod);
    }

    //Seteri

    public function setIme($ime){
        $this->ime = $ime;
    }
    
    public function setPrezime($prezime){
        $this->prezime = $prezime;
    }

    public function setGodRod($godRod){
        $this->godRod = $godRod;
    }

    public function setGrRod($grRod){
        $this->grRod = $grRod;
    }

    //Geteri

    public function getIme(){
        return $this->ime;
    }

    public function getPrezime(){
        return $this->prezime;
    }

    public function getGodRod(){
        return $this->godRod;
    }

    public function getGrRod(){
        return $this->grRod;
    }


}

?>