<?php

class Video{

    private $naslov;
    private $trajanje;

    public function __construct($n, $t){
        $this->setNaslov($n);
        $this->setTrajanje($t);
    }

    public function setNaslov($n){
        $this->naslov = $n;
    }

    public function setTrajanje($t){
        $this->trajanje = $t;
    }

    public function getNaslov(){
        return $this->naslov;
    }

    public function getTrajanje(){
        return $this->trajanje;
    }

    function stampaj(){
        echo "{$this->getNaslov()} {$this->getTrajanje()}";
    }

}



$video1 = new Video("Maratonci trce pocasni krug", 145);
$video2 = new Video("Balkan Ekspres", 133);
$video3 = new Video("Kum", 236);
$video4 = new Video("Balkanski spijun", 123);

$videi = array($video1, $video2, $video3, $video4);

function prosek($videi){
    $ukupno = 0;
    $br = 0;
    for($i = 0; $i < count($videi); $i++){
        $k = $videi[$i];
        $ukupno += $k->getTrajanje();
        $br++;
    }
    return $prosek = $ukupno / $br;
}
echo prosek($videi);

function najbliziProseku($videi){
        $prosek = prosek($videi);
        $k = $videi[0];
        $prvi = $k->getTrajanje();
        $najblizi = abs($prosek - $prvi);
        foreach($videi as $obj){
            $c = abs($prosek - $obj->getTrajanje());
            if($najblizi > $c){
                $najblizi = $c;
            }
        }
        foreach ($videi as $obj){
            $c = abs($prosek - $obj->getTrajanje());
            if($najblizi == $c){
                echo "{$obj->getNaslov()} - {$obj->getTrajanje()} minuta.";
            }
        }
    }
    echo "Najblizi proseku je: ";
    najbliziProseku($videi);
?>