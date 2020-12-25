<?php
//  Zadatak 1
// WHILE petlja
$n = 5;
$m = 17;
$proizvod = 1;
$sum = 0;

while($n <= $m)
{
    if($n % 7 == 0 && $n % 3 != 0)
    {
        $proizvod *= $n;
    }
    
    if($n % 3 == 0 && $n % 7 != 0)
    {
        $sum += $n;
    }
    $n++;
}
$razlika = $proizvod -$sum;
echo "<p>Razlika brojeva je $razlika</p>";


// FOR petlja
$m = 17;
$proizvod = 1;
$sum = 0;

for($n = 5; $n <= $m; $n++)
{   
    if($n % 7 == 0 && $n % 3 != 0){
        $proizvod *= $n;
    }
    if($n % 3 == 0 && $n % 7 != 0){
        $sum += $n;
    }
}
$razlika = $proizvod - $sum;
echo "<p>Razlika brojeva je $razlika</p>";

//Zadatak 2
//WHILE petlja
$n = 5;
$m = 10;
$sum = 0;
$kub = 1;

while($n <= $m)
{
    if($n % 2 != 0)
    {
        $kub = $n**3;
        $sum += $kub;
    }
    $n++;
}
echo "<p>Suma kubova je $sum</p>";

// FOR petlja

$m = 10;
$sum = 0;
$kub = 1;

for($n = 5; $n <= $m; $n++)
{
    if($n % 2 != 0)
    {
    $kub = $n**3;
    $sum += $kub;
    }
}
echo "<p>Suma kubova je $sum</p>";

?>