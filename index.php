<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masyvai</title>
</head>
<body>
  <?php

/*
1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
*/

echo "<h3>Pirma užduotis</h3>";

$arr1 = [];

for ($i=0; $i < 10; $i++) { 
    $tempArr = [];
    for ($a=0; $a < 5; $a++) { 
        $tempArr[] = rand(5, 25);
    }
    $arr1[] = $tempArr;
};

print_r($arr1);
echo "<hr>";

/* 
Naudodamiesi 1 uždavinio masyvu:
a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
b) Raskite didžiausio elemento reikšmę;
c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
d) Visus masyvus “pailginkite” iki 7 elementų
e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. 
T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
*/
echo "<h3>Antra užduotis a)</h3>";

$countArr1 = count($arr1);
$counter = 0;

for ($i=0; $i < $countArr1; $i++) { 
    for ($a=0; $a < 5; $a++) { 
        if ($arr1[$i][$a] > 10) {
            $counter++;
        };
    };
};

echo "Kiek pirmame masyve yra elementų didesnių už 10: $counter";
echo "<hr>";

echo "<h3>Antra užduotis b)</h3>";

$maxArray = [];

for ($i=0; $i < $countArr1; $i++) { 
    $temp = [];
    for ($a=0; $a < 5; $a++) { 
        $temp[] = $arr1[$i][$a];
    };
    $maxValue = max($temp);
    $maxArray[] = $maxValue;
};

$finalMaxValue = max($maxArray);

echo "Maximali reikšmė iš pirmojo masyvo yra: $finalMaxValue";
echo "<hr>";

echo "<h3>Antra užduotis c)</h3>";

$sum0 = 0;
$sum1 = 0;
$sum2 = 0;
$sum3 = 0;
$sum4 = 0;

for ($i=0; $i < $countArr1; $i++) { 

    for ($a=0; $a < 5; $a++) { 
        if ($a == 0) {
            $sum0 = $sum0 + $arr1[$i][$a];
        };
        if ($a == 1) {
            $sum1 = $sum1 + $arr1[$i][$a];
        };
        if ($a == 2) {
            $sum2 = $sum2 + $arr1[$i][$a];
        };
        if ($a == 3) {
            $sum3 = $sum3 + $arr1[$i][$a];
        };
        if ($a == 4) {
            $sum4 = $sum4 + $arr1[$i][$a];
        };
    };
};

echo "Suma su 0 indeksu: " . $sum0;
echo "<br>";
echo "Suma su 1 indeksu: " . $sum1;
echo "<br>";
echo "Suma su 2 indeksu: " . $sum2;
echo "<br>";
echo "Suma su 3 indeksu: " . $sum3;
echo "<br>";
echo "Suma su 4 indeksu: " . $sum4;

echo "<hr>";

echo "<h3>Antra užduotis d)</h3>";

for ($i=0; $i < $countArr1; $i++) { 
    $temporaryArray[] = $arr1[$i];
    for ($a=0; $a < 2; $a++) { 
        $arr1[$i][] = rand(5, 25);
    };
};

print_r($arr1);

echo "<hr>";

echo "<h3>Antra užduotis e)</h3>";

$sumuMasyvas = [];
$countArr1 = count($arr1);

for ($i=0; $i < $countArr1; $i++) { 
    $suma = 0;
    for ($a=0; $a < 7; $a++) { 
        $suma= $suma + $arr1[$i][$a];
    };
    $sumuMasyvas[] = $suma;
};

print_r($sumuMasyvas);

echo "<hr>";
/*
Sukurkite masyvą iš 10 elementų. 
Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
*/
echo "<h3>Trečia užduotis</h3>";


?>  
</body>
</html>