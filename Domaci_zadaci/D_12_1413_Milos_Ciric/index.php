<?php
    function digitron($broj1, $broj2, $oper){
        if($oper == "+"){
            $jdn = $broj1 + $broj2;
            echo "<p>$broj1 $oper $broj2 = $jdn</p>"; 
        }

        if($oper == "*"){
            $jdn = $broj1 * $broj2;
            echo "<p>$broj1 $oper $broj2 = $jdn</p>"; 
        }

        if($oper == "/"){
            $jdn = $broj1 / $broj2;
            echo "<p>$broj1 $oper $broj2 = $jdn</p>";
            
        }

        if($oper == "-"){
            $jdn = $broj1 - $broj2;
            echo "<p>$broj1 $oper $broj2 = $jdn</p>";
        }
    }

    echo digitron(12,6,"/");
?>