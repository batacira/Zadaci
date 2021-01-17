<?php

class Knjiga{

    private $naslov;
    private $autor;
    private $godIzdanja;
    private $brojStrana;
    private $cena;

    public function __construct($n, $a, $g, $b, $c){
        $this->setNaslov($n);
        $this->setAutor($a);
        $this->setGizdanja($g);
        $this->setBstrana($b);
        $this->setCena($c);
    }

    //Seteri

    public function setNaslov($n){
        $this->naslov = $n;
    }

    public function setAutor($a){
        $this->autor = $a;
    }

    public function setGizdanja($g){
        $this->godIzdanja = $g;
    }

    public function setBstrana($b){
        $this->brojStrana = $b;
    }

    public function setCena($c){
        $this->cena = $c;
    }

    //Geteri

    public function getNaslov(){
        return $this->naslov;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getGizdanja(){
        return $this->godIzdanja;
    }

    public function getBstrana(){
        return $this->brojStrana;
    }

    public function getCena(){
        return $this->cena;
    }

    //Metode
    public function stampaj(){
        echo "$this->naslov $this->autor $this->godIzdanja $this->brojStrana $this->cena"; 
    }

    public function obimna(){
        if($this->getBstrana() > 600){
            return true;
        }
        else{
            return false;
        }
    }

    public function skupa(){
        if($this->getCena() > 8000){
            return true;
        }
        else{
            return false;
        }
    }

    public function dugackoime(){
        if(strlen($this->getNaslov()) > 18){
            return true;
        }
        else{
            return false;
        }
    }

}

$knjiga1 = new Knjiga("Kaludjer koji je prodao svoj ferari", "Robin Sarma", 2011, 112, 728);
$knjiga1->stampaj();
echo "<br>";
echo "<hr>";
echo $knjiga1->obimna();
echo $knjiga1->skupa();
echo $knjiga1->dugackoime();
?> 
