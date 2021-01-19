<?php

class Autobus{

    private $rebraut;
    private $brsa;

    public function __construct($r, $b){
        $this->rebraut = $r;
        $this->brsa = $b;
    }

    public function setRba($r){
        $this->rebraut = $r;
    }

    public function setbrsa($b){
        $this->$brsa = $b;
    }

    public function getRebraut(){
        return $this->rebraut;
    }

    public function getbrsa(){
        return $this->brsa;
    }

    public function stampaj(){
        echo "{$this->getRebraut()} {$this->getbrsa()}"; 
    }

}

$autobus1 = new Autobus(230385, 43);
$autobus2 = new Autobus(288420, 70);
$autobus3 = new Autobus(332665, 50);

$autobusi = array($autobus1, $autobus2, $autobus3);

function ispisujeSve($autobusi){
    foreach($autobusi as $obj){
        echo "Registracija {$obj->getRebraut()} - Broj sedista {$obj->getbrsa()}, ";
    }
}
ispisujeSve($autobusi);


function ukupnoSedista($autobusi){
    $suma = 0;
    foreach($autobusi as $obj){
        $suma += $obj->getbrsa();
    }
    return $suma;
}
echo "<hr>";


function maksSedista($autobusi){
    $prviAutobus = $autobusi[0];
    $najveci = $prviAutobus->getbrsa();
    foreach($autobusi as $obj){
        if($obj->getbrsa() > $najveci){
            $najveci = $obj->getbrsa();
            echo " Informacije o autobusu sa max sedista {$obj->stampaj()}";
        }
    }
}

maksSedista($autobusi);


function ljudi($brljudi, $autobusi){
    $sedista = 0;
    foreach($autobusi as $obj){
        $sedista += $obj->getbrsa();
    }
    if($sedista >= $brljudi){
        return true;
    }
    else{
        return false;
    }
}


echo ljudi(150,$autobusi);

?>