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
*/
echo "<h3>Antra užduotis a)</h3>";

$countArr1 = count($arr1);
$counter = 0;

for ($i=0; $i < $countArr1; $i++) {
    $counterArr2 = count($arr1[$i]); 
    for ($a=0; $a < $counterArr2; $a++) { 
        if ($arr1[$i][$a] > 10) {
            $counter++;
        };
    };
};

echo "Kiek pirmame masyve yra elementų didesnių už 10: $counter";
echo "<hr>";

// b) Raskite didžiausio elemento reikšmę;

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


$maxVal = $arr1[0][0];

for ($i=0; $i < $countArr1; $i++) { 
    for ($a=0; $a < count($arr1[$i]); $a++) { 
        if($arr1[$i][$a] > $maxVal){
            $maxVal = $arr1[$i][$a];
        }
    }
}

echo $maxVal;

echo "Maximali reikšmė iš pirmojo masyvo yra: $finalMaxValue";
echo "<hr>";

// c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

echo "<h3>Antra užduotis c) vienas būdas:</h3>";

$sum0 = 0;
$sum1 = 0;
$sum2 = 0;
$sum3 = 0;
$sum4 = 0;

for ($i=0; $i < $countArr1; $i++) { 

    for ($a=0; $a < 5; $a++) { 
        if ($a == 0) {
            $sum0 += $arr1[$i][$a];
        };
        if ($a == 1) {
            $sum1 += $arr1[$i][$a];
        };
        if ($a == 2) {
            $sum2 += $arr1[$i][$a];
        };
        if ($a == 3) {
            $sum3 += $arr1[$i][$a];
        };
        if ($a == 4) {
            $sum4 += $arr1[$i][$a];
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

echo "<h3>Antra užduotis c) kitas būdas:</h3>";

for ($a=0; $a < count($arr1[0]); $a++) { 
    $result = 0;
    for ($i=0; $i < count($arr1); $i++) { 
        $result += $arr1[$i][$a];
    }
    echo $result.", ";
}

echo "<hr>";

// d) Visus masyvus “pailginkite” iki 7 elementų

echo "<h3>Antra užduotis d)</h3>";

for ($i=0; $i < $countArr1; $i++) { 
    $temporaryArray[] = $arr1[$i];
    for ($a=0; $a < 2; $a++) { 
        $arr1[$i][] = rand(5, 25);
    };
};

print_r($arr1);

echo "<hr>";

/*e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. 
T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai */

echo "<h3>Antra užduotis e)</h3>";

$sumuMasyvas = [];
$countArr1 = count($arr1);

for ($i=0; $i < $countArr1; $i++) { 
    $suma = 0;
    for ($a=0; $a < 7; $a++) { 
        $suma += $arr1[$i][$a];
    };
    $sumuMasyvas[] = $suma;
};

print_r($sumuMasyvas);

echo "<hr>";
/*
3. Sukurkite masyvą iš 10 elementų. 
Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
*/
echo "<h3>Trečia užduotis</h3>";

$arr3 = [];
$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

for ($i=0; $i < 10; $i++) { 
    $tempArr = [];
    $randomNumber = rand(2, 20);
    for ($a=0; $a < $randomNumber; $a++) { 
        $shuffled = str_shuffle($string);  
        $randomLetter = substr($shuffled,-1);
        $tempArr[] = $randomLetter;
    }
    $arr3[] = $tempArr;
};

$counter = count($arr3);

for ($i=0; $i < $counter; $i++) { 
    sort($arr3[$i]);
}

print_r($arr3);
echo "<hr>";

/*
4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. 
Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.
*/
echo "<h3>Ketvirta užduotis</h3>";

// $testArray = [];

// for ($i=0; $i < $counter; $i++) { 
//     $tempCounter = count($arr3[$i]);
//     $tempSecondLevelArray = $arr3[$i];
//     for ($a=0; $a < $tempCounter; $a++) { 
//         if (strtolower($arr3[$i][$a]) == "k") {
//             $testArray[] = $i;
//         };
//     };
// };

// print_r($testArray);

// $counterTestArray = count($testArray);

// for ($i=0; $i < $counter; $i++) { 
//     for ($a=0; $a < $counterTestArray; $a++) { 
//         if ($i == $a) {
//             $temporary = $arr3[$i];
        
//         }
//     }
// }

echo "<hr>";

/*
5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] 
user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 
*/
echo "<h3>Penkta užduotis</h3>";

$penktasArray = [];
$penktoArrayIDs = [];

for ($i=0; $i < 30; $i++) { 
    $id = rand(0, 100);
    if (in_array($id, $penktoArrayIDs)) {
        $i--;
        continue;
    }
    $penktoArrayIDs[] = $id;
    $penktasArray[] = array('user_id' => rand(0, 1000000), 'place_in_row' => rand(0, 100));// kitas būdas: =['user_id' => rand(0, 1000000), 'place_in_row' => rand(0, 100)]
};

print_r($penktasArray);

echo "<hr>";

/*
6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
*/

echo "<h3>Šešta užduotis</h3>";

$counterPenktoArray = count($penktasArray);

for ($i=0; $i < $counterPenktoArray; $i++) { 
    for ($a=$i+1; $a < $counterPenktoArray; $a++) { 
        if ($penktasArray[$i]['user_id'] > $penktasArray[$a]['user_id']) {
            $tmp = $penktasArray[$i]['user_id'];
            $penktasArray[$i]['user_id'] = $penktasArray[$a]['user_id'];
            $penktasArray[$a]['user_id'] = $tmp;
        }
    }
};

print_r($penktasArray);

echo "<hr>";

/*
7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. 
Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
 */

echo "<h3>Septinta užduotis</h3>";

$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

for ($i=0; $i < $counterPenktoArray; $i++) { 
    $tmpCounter = count($penktasArray[$i]);
    $randomNumber1 = rand(5,15);
    $randomNumber2 = rand(5,15);
    for ($a=0; $a < $tmpCounter; $a++) { 
        $shuffled1 = str_shuffle($string);
        $shuffled2 = str_shuffle($string);
        $randomCombination1 = substr($shuffled1, 0, $randomNumber1);
        $randomCombination2 = substr($shuffled2, 0, $randomNumber2);
        $penktasArray[$i]['name'] = $randomCombination1;
        $penktasArray[$i]['surname'] = $randomCombination2;
    }
};

print_r($penktasArray);

echo "<hr>";

/*
8. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. 
Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. 
Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
*/
echo "<h3>Aštunta užduotis</h3>";

$astuntasArray = [];

for ($i=0; $i < 10; $i++) { 
    $random = rand(0, 5);
    if ($random == 0) {
        $astuntasArray[] = rand(0,10);
        continue;
    }
    $temporaryArray = [];
    for ($a=0; $a < $random ; $a++) { 
        $temporaryArray[] = rand(0, 10);
    }
    $astuntasArray[] = $temporaryArray;
};

print_r($astuntasArray);

echo "<hr>";

/*
9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės
 arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
*/

$counterAstunto = count($astuntasArray);
$sumuMasyvas = [];

for ($i=0; $i < $counterAstunto; $i++) {
    $sum = 0; 
    if (is_array($astuntasArray[$i])) {
        for ($a=0; $a < count($astuntasArray[$i]); $a++) { 
            $sum += $astuntasArray[$i][$a];
        }
        $sumuMasyvas[] = $sum;
    } else {
        $sumuMasyvas[] = $astuntasArray[$i];
    }
};

sort($sumuMasyvas);

print_r($sumuMasyvas);

echo "<h3>Devinta užduotis</h3>";
echo "<hr>";

/*
10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. 
Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. 
Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. 
Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
*/

echo "<h3>Dešimta užduotis</h3>";
echo "<hr>";

/*
11. Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.
NEGALIMA! naudoti jokių palyginimo operatorių (if-else, swich, ()?:)
NEGALIMA! naudoti jokių regex ir string funkcijų.
GALIMA naudotis tik aritmetiniais veiksmais ir matematinėmis funkcijomis iš skyrelio: https://www.php.net/manual/en/ref.math.php

Jeigu reikia, kodo patogumui galima panaudoti įvairias funkcijas, bet sprendimo pagrindas turi būti matematinis.

Atsakymą reikia pateikti formatu:
echo '<h3>Skaičius 789 yra pakartotas '.$sk1.' kartų, o skaičius 123 - '.$sk2.' kartų.</h3>';

Kur rudi skaičiai yra pakeisti skaičiais $a ir $b generuojamais kodo.
*/

echo "<h3>Vienuolikta užduotis</h3>";

do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';

echo "<hr>";

?>  
</body>
</html>