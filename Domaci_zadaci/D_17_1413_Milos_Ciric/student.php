<?php

abstract class Student{
    protected $ime;
    protected $espbOsvojeniPoeni;
    protected $prosecnaOcena;

    public function __construct($ime, $espbOsvojeniPoeni, $prosecnaOcena){
        $this->setIme($ime);
        $this->setEspbPoeni($espbOsvojeniPoeni);
        $this->setProsecnaOcena($prosecnaOcena);
    }

    //Seteri

    public function setIme($ime){
        $this->ime = $ime;
    }

    public function setEspbPoeni($espbOsvojeniPoeni){
        $this->espbOsvojeniPoeni = $espbOsvojeniPoeni;
    }

    public function setProsecnaOcena($prosecnaOcena){        
            $this->prosecnaOcena = $prosecnaOcena;
    }

    //Geteri

    public function getIme(){
        return $this->ime;
    }

    public function getEspbOsvojeniPoeni(){
        return $this->espbOsvojeniPoeni;
    }

    public function getProsecnaOcena(){
        return $this->prosecnaOcena;
    }

    //Metode

    public function ispisi(){
        echo "
            <ul>
                <li>{$this->ime}</li>
                <li>{$this->espbOsvojeniPoeni}</li>
                <li>{$this->prosecnaOcena}</li>
                
            </ul>
        
        ";
    }

    public abstract function skolarina($espbPoeni); 

    public abstract function prijavaIspita();

    

}

?>