echo'_1uzduotis_';<br>
<?php
echo '<pre>';
$m1 = [];

for ($i = 0; $i < 10; $i++) {
    $s1 = [];
    for ($j = 0; $j < 5; $j++) {
        $s1[] = mt_rand(5, 25);  //  mt_rand -funkcija grąžina atsitiktinį sveikąjį skaičių 
    }
    $m1[] = $s1;
}

print_r($m1);
?><br><br>

eho '_2uzduotis_'; <br>
<?php
// Sugeneruoti masyvą
$mas = [];
for ($i = 0; $i < 10; $i++) {
    $subArray = [];
    for ($j = 0; $j < 5; $j++) {
        $subArray[] = rand(5, 25);
    }
    $mas[] = $subArray;
}

// a) Suskaičiuoti elementus didesnius už 10
$count = 0;
foreach ($mas as $subArray) {
    foreach ($subArray as $element) {
        if ($element > 10) {
            $count++;
        }
    }
}
echo "a) Elementų didesnių už 10 yra: " . $count . "\n";

// b) Rasti didžiausią elemento reikšmę
$maxValue = null;
foreach ($mas as $subArray) {
    foreach ($subArray as $element) {
        if ($maxValue === null || $element > $maxValue) {
            $maxValue = $element;
        }
    }
}
echo "b) Didžiausias elemento reikšmė: " . $maxValue . "\n";

// c) Suskaičiuoti kiekvieno antro lygio masyvų su vienodais indeksais sumas
$sums = [];
foreach ($mas as $subArray) {
    foreach ($subArray as $index => $element) {
        if (!isset($sums[$index])) {
            $sums[$index] = 0;
        }
        $sums[$index] += $element;
    }
}
echo "c) Sumos kiekvienam indeksui: \n";
print_r($sums);

// d) Visus antro lygio masyvus "pailginti" iki 7 elementų
foreach ($mas as &$subArray) {
    while (count($subArray) < 7) {
        $subArray[] = 0;
    }
}
unset($subArray); // Išvalyti nuorodą, kad neįtakotų kitų ciklų

// e) Suskaičiuoti kiekvieno antro lygio masyvų elementų sumą atskirai
$elementSums =[];
foreach ($mas as $subArray) {
    $elementSums[] = array_sum($subArray);
}
echo "e) Kiekvieno masyvo elementų sumos: \n";
print_r($elementSums);
?><br>
echo'_3uzduotis_';<br>
<?php
// Sukurkite masyvą iš 10 elementų
$masyvas = [];

for ($i = 0; $i < 10; $i++) {
    // Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų
    $kiekis = rand(2, 20);
    $elementas = [];

    for ($j = 0; $j < $kiekis; $j++) {
        // Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z
        $elementas[] = chr(rand(65, 90));
    }

    $masyvas[] = $elementas;
}

// Išrūšiuokite antro lygio masyvus pagal abėcėlę
foreach ($masyvas as &$elementas) {
    sort($elementas);
}

unset($elementas); // Išvalome nuorodą į paskutinį elementą

// Atspausdiname rezultatą
foreach ($masyvas as $elementas) {
    echo implode(', ', $elementas) . "\n";
}
?><br>
echo'_4uzduotis_';<br>
<?php
// Sukurkite masyvą iš 10 elementų
$m1 = [];
for ($i = 0; $i < 10; $i++) {
    // Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų
    $m2 = [];
    $randomLength = rand(2, 20);
    for ($j = 0; $j < $randomLength; $j++) {
        // Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z
        $m2[] = chr(rand(65, 90));
    }
    $m1[] = $m2;
}

// Išrūšiuokite antro lygio masyvus pagal abėcėlę
foreach ($m1 as &$m2) {
    sort($m2);
}

// Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad trumpiausi masyvai eitų pradžioje
usort($m1, function ($a, $b) {
    return count($a) - count($b);
});

// Išrūšiuokite masyvą taip, kad masyvai su bent viena "K" raidė būtų pradžioje
usort($m1, function ($a, $b) {
    $hasK_a = in_array('K', $a);
    $hasK_b = in_array('K', $b);

    if ($hasK_a && !$hasK_b) {
        return -1;
    } elseif (!$hasK_a && $hasK_b) {
        return 1;
    } else {
        return 0;
    }
});

// Spausdiname rezultatus
foreach ($m1 as $m2) {
    echo implode(', ', $m2) . "<br>";
}
?><br>

echo'_5uzduotis_';<br>
<?php
// Sukuriamas tuščias masyvas
$masyvas = [];

// Generuojami 30 masyvo elementai
for ($i = 0; $i < 30; $i++) {
    $user_id = rand(1, 1000000); // Atsitiktinis unikalus skaičius nuo 1 iki 1000000
    $place_in_row = rand(0, 100); // Atsitiktinis skaičius nuo 0 iki 100

    // Sukuriamas masyvo elementas
    $elementas = [
        'user_id' => $user_id,
        'place_in_row' => $place_in_row
    ];

    // Masyvo elementas pridedamas į masyvą
    $masyvas[] = $elementas;
}

// Spausdinamas sukurtas masyvas
print_r($masyvas);
?><br>

echo'_6uzduotis_';<br>

<?php
// Masyvas iš 5 uždavinio
$masyvas = [
    ['user_id' => 456, 'place_in_row' => 10],
    ['user_id' => 123, 'place_in_row' => 50],
    ['user_id' => 789, 'place_in_row' => 30],

];

// Rūšiavimas pagal user_id didėjančia tvarka
usort($masyvas, function ($a, $b) {
    return $a['user_id'] - $b['user_id'];
});

// Rūšiavimas pagal place_in_row mažėjančia tvarka
usort($masyvas, function ($a, $b) {
    return $b['place_in_row'] - $a['place_in_row'];
});

// Spausdinamas surūšiuotas masyvas
print_r($masyvas);
?><br><br>
echo'_7uzduotis_'<br>
<?php
// 5 uždavinio masyvas
$m1 = [
    ['user_id' => 3, 'place_in_row' => 2],
    ['user_id' => 1, 'place_in_row' => 4],
    ['user_id' => 5, 'place_in_row' => 1],
    ['user_id' => 2, 'place_in_row' => 3],
    ['user_id' => 4, 'place_in_row' => 5]
];

// Rūšiavimas pagal user_id didėjančia tvarka ir place_in_row mažėjančia tvarka
usort($m1, function ($a, $b) {
    if ($a['user_id'] === $b['user_id']) {
        return $b['place_in_row'] <=> $a['place_in_row'];
    }
    return $a['user_id'] <=> $b['user_id'];
});

// Pridėti name ir surname elementus
foreach ($m1 as &$item) {
    $item['name'] = generateRandomString(5, 15);
    $item['surname'] = generateRandomString(5, 15);
}

// Atspausdinimas
echo '<pre>';
print_r($m1);

// Atsitiktinio stringo generavimo funkcija
function generateRandomString($minLength, $maxLength)
{
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $stringLength = mt_rand($minLength, $maxLength);
    $randomString = '';
    for ($i = 0; $i < $stringLength; $i++) {
        $randomString .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?><br>

echo'_8uzduotis_'<br>
<?php
$m1 = []; // Sukuriame pagrindinį masyvą

for ($i = 0; $i < 10; $i++) {
    $value = rand(0, 5); // Generuojame skaičių nuo 0 iki 5

    if ($value != 0) {
        $s1 = []; // Sukuriame antro lygio masyvą
        for ($j = 0; $j < $value; $j++) {
             $s1[] = rand(0, 10); // Užpildome antro lygio masyvą atsitiktiniais skaičiais nuo 0 iki 10
        }

        $m1[] = $s1; // Pridedame antro lygio masyvą į pagrindinį masyvą
    } else {
        $m1[] = rand(0, 10); // Jeigu reikšmė yra 0, tiesiogiai įrašome skaičių nuo 0 iki 10 į pagrindinį masyvą
    }
}

print_r($m1); // Išvedame pagrindinį masyvą
?><br><br>
echo'_9uzduotis_';<br>
<?php

// Sukurkite masyvą iš 10 elementų
$masyvas = [];

for ($i = 0; $i < 10; $i++) {
    $reiksme = rand(0, 5); // Generuojame skaičių nuo 0 iki 5

    // Jeigu reikšmė yra 0, masyvo nekurkime
    if ($reiksme === 0) {
        continue;
    }

    // Jeigu reikšmė nėra 0, kurkime masyvą
    $antroLygioMasyvas = [];

    // Užpildome antro lygio masyvą atsitiktiniais skaičiais nuo 0 iki 10
    for ($j = 0; $j < $reiksme; $j++) {
        $antroLygioMasyvas[] = rand(0, 10);
    }

    // Jeigu masyvas nebuvo sukurtas, tiesiogiai įrašome reikšmę
    if (empty($antroLygioMasyvas)) {
        $masyvas[] = $reiksme;
    } else {
        $masyvas[] = $antroLygioMasyvas;
    }
}

// Paskaičiuojame masyvo visų reikšmių sumą
function skaiciuotiSuma($masyvas) {
    $suma = 0;

    foreach ($masyvas as $reiksme) {
        if (is_array($reiksme)) {
            $suma += skaiciuotiSuma($reiksme); // Rekursyviai skaičiuojame masyvo reikšmių sumą
        } else {
            $suma += $reiksme;
        }
    }

    return $suma;
}

$suma = skaiciuotiSuma($masyvas);

// Išrūšiuojame masyvą
function rikiuotiMasyva($masyvas) {
    usort($masyvas, function ($a, $b) {
        if (is_array($a)) {
            $a = skaiciuotiSuma($a);
        }
        if (is_array($b)) {
            $b = skaiciuotiSuma($b);
        }
        return $a - $b;
    });

    return $masyvas;
}

$rikiuotasMasyvas = rikiuotiMasyva($masyvas);

// Spausdiname rezultatus
echo "Pradinis masyvas: " . json_encode($masyvas) . "<br>";
echo "Visų reikšmių suma: " . $suma . "<br>";
echo "Išrūšiuotas masyvas: " . json_encode($rikiuotasMasyvas) . "<br>";

?><br><br>
echo'_10uzduotis_';<br>
<?php

// Sukuriame masyvą
$masyvas = [];

// Užpildome masyvą
for ($i = 0; $i < 10; $i++) {
    $masyvas[$i] = [];
    for ($j = 0; $j < 10; $j++) {
        $value = randomSymbol();//value reikšmė parenkama atsitiktinai iš simbolių rinkinio "#%+*@裡",
         $color = randomColor();// o color reikšmė generuojama atsitiktinai HEX spalvos formato (#XXXXXX).
        $masyvas[$i][$j] = ['value' => $value, 'color' => $color];
    }
}

// Spausdiname "kvadratą"
foreach ($masyvas as $eilute) {
    foreach ($eilute as $elementas) {
        echo '<span style="background-color: ' . $elementas['color'] . ';">' . $elementas['value'] . '</span>';
    }
    echo '<br>';
}

// Atsitiktinai parinkti simboliai
function randomSymbol() {
    $simboliai = "#%+*@裡";
    return $simboliai[rand(0, strlen($simboliai) - 1)];
}

// Atsitiktinės spalvos generavimas
function randomColor() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}

?>