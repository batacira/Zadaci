<?php
    // Zadatak 1
    $dan = date ("w");
    $sati = date("G");
    
    if($dan > 0 && $dan < 6 ){
        echo "Radni dan je";
        if($sati >= 9 && $sati < 17){
        echo " i butik sada radi.";   
        }else{
            echo " ali butik je zatvoren.";
        }
        }
        
        
    elseif($dan == 0 || $dan == 6) {
        if($sati >=10 && $sati < 18){
            echo "Vikend je ali butik radi.(Od 10 do 18 casova.)";
        }
        else{
            echo "Butik ne radi";
        }
    }
    
    //Zadatak 2
    $td = 200; //testirani dnevno
    $p = 50;  //pozitivni dnevno
    $s = 7000000; //stanovnici zemlje
    $sz = 700001;  //stanovnici zarazeni
    $procenat1 = (100 / $td) * $p;
    $procenat2 = (100 / $s) * $sz ;
    if($procenat1 > 30 || $procenat2 > 10){
        echo "<p style ='color:red'>VANREDNO STANJE</p>";
    }
    
?>