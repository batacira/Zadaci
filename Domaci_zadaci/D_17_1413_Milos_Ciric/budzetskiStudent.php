<?php
//Kreirati klasu BudzetskiStudent koja nasleđuje klasu Student. Visinina školarine jednaka je (300 - osvojeniESPB) * 2000, a prijava ispita je 100 din.

    class BudzetskiStudent extends Student {
    

        public $espbPrijavljeni;

        public function __construct($ime, $espbOsvojeniPoeni, $prosecnaOcena) {
            parent::__construct($ime, $espbOsvojeniPoeni, $prosecnaOcena);
        }

        public function getEspbPrijavljeni() {
            return $this->espbPrijavljeni;
        }

        public function setEspbPrijavljeni($espbPrijavljeni) {
            $this->espbPrijavljeni = $espbPrijavljeni;
        }


        public function skolarina($espbPoeni) {
            return (300 - $this->espbOsvojeniPoeni) * 200;

        }

        public function prijavaIspita() {
            return 100;
        }

    }

?>