<?php

// Kreirati asocijativni niz sportista, pri čemu su ključevi tog asocijativnog niza
// stringovi - imena tih sportista, dok su vrednosti tog asocijativnog niza realni
// brojevi - visina sportista u metrima.

// ➢ Napisati funkciju prosecnaVisina kojoj se prosleđuje niz sportista, a ona vraća
// prosečnu visinu sportista.

// ➢ Napisati funkciju natprosecnoVisoki kojoj se prosleđuje niz sportista i dve boje
// (nazivi boja na engleskom jeziku).
// U funkciji je potrebno ispisati imena svih sportista u posebnim paragrafima.
// Ukoliko je sportista viši od prosečne visine, njegovo ime obojiti prvom
// prosleđenom bojom. U suprotnom, ime sportiste obojiti drugom prosleđenom
// bojom.

// ➢ Napisati funkciju maxDuzina kojoj se prosleđuje niz sportista, a ona ispisuje
// imena svih sportista, svako u posebnom paragrafu, koji imaju maksimalnu dužinu
// (više sportista u nizu može imati ime maksimalne dužine).

$sportisti = array("Nikola Jokic" => 207, "Dejan Bodiroga" => 201, "Nikola Kalinic" => 198, "Zeljko Rebraca" => 205);

function prosecnaVisina($sportisti){
    $suma = 0;
    $br = 0;
    foreach($sportisti as $key => $value){
        $suma += $value;
        $br++;
    }
    $prosek = $suma / $br;
    return $prosek;
    }

    function natprosecnoVisoki($sportisti, $boja1, $boja2){
        foreach($sportisti as $key => $value){
            if(prosecnaVisina($sportisti) < $value){
                echo "<p style='color:$boja1'>$key</p>";
            }
            else{
                echo "<p style='color:$boja2'>$key</p>";
            }
        }
            
    }
natprosecnoVisoki($sportisti, 'red', 'blue');

function maxDuzina($sportisti){
    $vrednosti = array_values($sportisti);
    $najveca = $vrednosti[0];
    foreach ($sportisti as $key => $value){
        if($najveca <= $value){
            $najveca = $value;
            
        }
        
    }

}

// Trener igrače na treningu deli u dva tima kako bi se što bolje pripremili za
// utakmicu. Kada trener dobije spisak sportista (niz sportista) on ih deli na sledeći
// način:
// ○ Ukoliko je na spisku paran broj igrača, trener u prvi tim stavlja prvu
// polovinu igrača sa spiska, dok drugi tim čine igrači sa druge polovine liste
$sportisti = array("Nikola Jokic" => 207, "Dejan Bodiroga" => 201, "Nikola Kalinic" => 198, "Zeljko Rebraca" => 205);

for($i = 0; $i <count($sportisti);$i++){
    if(count($sportisti) / 2 == 0){
        
    }
}



?>
