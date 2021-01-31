<?php

require_once "student.php";
require_once "samofinansirajuciStudent.php";
require_once "budzetskiStudent.php";



$s1 = new SamofinansirajuciStudent("Jovan", 40, 7.5);
$s2 = new SamofinansirajuciStudent("Petar", 45, 6.5);
$s3 = new SamofinansirajuciStudent("Dusan", 36, 8.1);
$s4 = new BudzetskiStudent("Dragan", 64, 7.8);
$s5 = new BudzetskiStudent("Milan", 55, 8.5);

$nizStudenata = array($s1, $s2, $s3, $s4, $s5);
$ukupanBrojStudenata = count($nizStudenata);

// Student sa najvecom skolarinom

$randomEspb = rand(35, 60);
$nizStudenata[0]->setEspbPrijavljeni($randomEspb);
$maxSkolarina = $nizStudenata[0]->skolarina($randomEspb);

$studentMax = $nizStudenata[0]; 

$ukupnaSkolarina = $nizStudenata[0]->skolarina($randomEspb);

for ($i = 1; $i < $ukupanBrojStudenata; $i++) {
    $randomEspb = rand(35, 60);
    $nizStudenata[$i]->setEspbPrijavljeni($randomEspb);

    if ( $nizStudenata[$i]->skolarina($randomEspb) > $maxSkolarina ) {
        $maxSkolarina = $nizStudenata[$i]->skolarina($randomEspb);
        $studentMax = $nizStudenata[$i];
    }

    $ukupnaSkolarina += $nizStudenata[$i]->skolarina($randomEspb);

}

foreach ($nizStudenata as $student) {
    echo "<li>{$student->getIme()} ESPB Prijavljenih: {$student->espbPrijavljeni}</li>";
}

echo "<p>Student sa max skolarinom: {$studentMax->getIme()}</p>";


// Prosecna skolarina svih studenata

$prosecnaSkolarina = $ukupnaSkolarina / $ukupanBrojStudenata;

echo "<p>Prosecna skolarina svih studenata: {$prosecnaSkolarina}</p>";


// Prosecan odnos skolarine i broja osvojenih ESPB bodova

$ukupanBrojBodova = 0;

foreach ($nizStudenata as $student) {
    $ukupanBrojBodova += $student->getEspbOsvojeniPoeni();
}

$prosecanOdnos = $ukupnaSkolarina / $ukupanBrojBodova;

echo "<p>Prosecan odnos: {$prosecanOdnos}</p>";



// Student sa minimalnim brojem osvojenih ESPB
            
$minBodova = $nizStudenata[0]->getEspbOsvojeniPoeni();
$studentMinBodova = $nizStudenata[0]; 

foreach($nizStudenata as $student) {
    if($student->getEspbOsvojeniPoeni() < $minBodova){
        $minBodova = $student->getEspbOsvojeniPoeni();
        $studentMinBodova = $student;
    }                
}

$viseStudenata = [];

foreach($nizStudenata as $student) {
    if($student->getEspbOsvojeniPoeni() == $minBodova){
        $viseStudenata[] = $student;
    }
}

if ( count($viseStudenata) > 1 ) {

    $maxSkolarina = $viseStudenata[0]->skolarina($viseStudenata[0]->getEspbPrijavljeni());

    $studentMax = $viseStudenata[0]; 

    for ($i = 1; $i < count($viseStudenata); $i++) {
        if ( $viseStudenata[$i]->skolarina($viseStudenata[$i]->getEspbPrijavljeni()) > $maxSkolarina ) {
            $maxSkolarina = $viseStudenata[$i]->skolarina($viseStudenata[$i]->getEspbPrijavljeni());
            $studentMax = $viseStudenata[$i];
        }

    }

    $studentMinBodova = $studentMax;

}


echo "<p>Student sa minimalnim brojem osvojenih ESPB: {$studentMinBodova->getIme()}</p>";


?>