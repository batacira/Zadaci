<?php
//Prvi zadatak
    $v = 150;
    $num = 80;
    $ostatak = ($v / $num);
    $ostalo = floor($v / 3 );
    $ne = $num - $ostalo;

    if($ostatak >=3){
        echo  '<i style="color:green;font-size:30px;font-family:calibri ;">
    Da </i> ';
    }
    else  {    
    echo $ne;
    echo '<i style="color:red;font-size:30px;font-family:calibri ;">
    Ne </i> ';
    }

    //Drugi zadatak
$y = date ("Y");
$p = 18;
$pun = $y - $p;
$r = 2003; //Primer godine rodjenja osobe

if ($pun >= $r){
    echo "<p>da</p>";
}
else {
    echo "ne";
}

?>