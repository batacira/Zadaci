<?php

class SamofinansirajuciStudent extends Student {
    // Kreirati klasu SamofinansirajuciStudent koja nasleđuje klasu Student, a koja računa visinu školarine na osnovu parametra (broj prijavljenih espb bodova) po fomuli: Ako je prosečna ocena manja od 8, onda je školarina 1900 * espb, a u suprotnom je 1600 * espb. Prijava ispita je 400 din.

    public $espbPrijavljeni;

    public function __construct($ime, $espbPoeni, $prosecnaOcena) {
        parent::__construct($ime, $espbPoeni, $prosecnaOcena);
    }

    public function getEspbPrijavljeni() {
        return $this->espbPrijavljeni;
    }

    public function setEspbPrijavljeni($espbPrijavljeni) {
        $this->espbPrijavljeni = $espbPrijavljeni;
    }

    public function skolarina($espbPoeni) {
        if($this->prosecnaOcena < 8){
           return 1900 * $espbPoeni;
        }
        else{
            return 1600 * $espbPoeni;
        }

    }

    public function prijavaIspita() {
        return 400;
    }

}

?>