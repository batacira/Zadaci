<?php
//  Zadatak 1
$num = 175;
$nu = $num;
$sum=0; $rem=0; $i=0;
while($i < $nu){
$rem=$num%10;
$sum = $sum + $rem;
$num=$num/10;
$i++;
}

if($sum == $nu){
    echo "<p style='border: 1px solid orange'>$sum</p>";
    }
else{
    echo "<p style='border: 1px solid blue'>$sum</p>";
    }


// Zadatak 2
$br = 0;
$n = 14;
$k = 0;

while($k <= $n){
    if($k % 3 == 0 && $k % 2 !=0){
        $br++;
    }
    $k++;
}
echo $br;
?>