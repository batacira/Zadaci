<!--  Zadatak 1 -->
<?php
    $farenhajt = 150;
    $kelvin = 350;
    $celzijusF = ($farenhajt - 32) * 5/9;
    $celzijusK = $kelvin - 273.15; 
    echo "<br>";
    $kelvinOdFarenhajt = $celzijusF + 273.15;
    $farenhajtOdKelvina = $celzijusK / (5/9) + 32;
    echo $celzijusF;
    echo "<br>";
    echo $celzijusK;
    echo "<br>";
    echo $kelvinOdFarenhajt;
    echo "<br>";
    echo $farenhajtOdKelvina;

    echo "<br>";
    echo "<br>";
    echo "<br>";

    
    // Zadatak 2
    $n = 12;
    $a = 4;
    $b = $a + 2;
    $ostalo = $n - ($a + $b);
    echo $ostalo;
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //Zadatak 3
    $p = 1000;
    $m = 2000;
    $k = 1300;
    $dz = ($p + $m - $k) / 2; 
    $pkusur = $p - $dz;
    $mkusur = $m - $dz;
    echo $pkusur;
    echo "<br>";
    echo $mkusur;
    
?>