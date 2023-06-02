echo'_1uzduotis_';<br>
<?php
echo '<pre>';
$m1= [];

for ($i = 0; $i < 30; $i++) {
    $randomNumber = mt_rand(5, 25);
    $m1[] = $randomNumber;
}

foreach ($m1 as $key => $value) {
    echo "[$key] => $value<br>";//
}
?><br><br>

echo' _2uzduotis_';<br>
<?php
echo '<pre>';
// 1. Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
$masyvas = [5, 12, 8, 15, 7, 20, 25];
$didesniuUz10 = 0;

foreach ($masyvas as $reiksme) {
    if ($reiksme > 10) {
        $didesniuUz10++;
    }
}
echo "Reikšmių didesnių už 10 yra: " . $didesniuUz10 . "<br>";

// 2. Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
$didesneReiksme = max($masyvas);
$indeksai = array_keys($masyvas, $didesneReiksme);

echo "Didžiausia reikšmė: " . $didesneReiksme . "<br>";
echo "Jos indeksas (-ai): " . implode(', ', $indeksai) . "<br>";

// 3. Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
$poriniuSuma = 0;

for ($i = 0; $i < count($masyvas); $i += 2) {
    $poriniuSuma += $masyvas[$i];
}

echo "Porinių indeksų reikšmių suma: " . $poriniuSuma . "<br>";

// 4. Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
$naujasMasyvas = [];

foreach ($masyvas as $indeksas => $reiksme) {
    $naujasMasyvas[] = $reiksme - $indeksas;
}

print_r($naujasMasyvas);

// 5. Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
for ($i = count($masyvas); $i <= 39; $i++) {
    $masyvas[$i] = rand(5, 25);
}

print_r($masyvas);

// 6. Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
$neporiniaiMasyvas = [];
$poriniaiMasyvas = [];

foreach ($masyvas as $indeksas => $reiksme) {
    if ($indeksas % 2 === 0) {
        $neporiniaiMasyvas[] = $reiksme;
    } else {
        $poriniaiMasyvas[] = $reiksme;
    }
}

echo "Neporinių indekso reikšmių masyvas: <br>";
print_r($neporiniaiMasyvas);

echo "Porinių indekso reikšmių masyvas:<br>";
print_r($poriniaiMasyvas);

// Lyginių indeksų reikšmes, didesnes už 15, pakeičiame į 0
foreach ($masyvas as $indeksas => $reiksme) {
    if ($indeksas % 2 == 0 && $reiksme > 15) {
        $masyvas[$indeksas] = 0;
    }
}

print_r($masyvas);

// Surandame pirmą (mažiausią) indeksą, kurio elemento reikšmė yra didesnė už 10
$pirmasIndeksasDidesnisUz10 = null;
foreach ($masyvas as $indeksas => $reiksme) {
    if ($reiksme > 10) {
        $pirmasIndeksasDidesnisUz10 = $indeksas;
        break;
    }
}

echo "Pirmas indeksas, kurio elemento reikšmė yra didesnė už 10: $pirmasIndeksasDidesnisUz10\n";

// Naudodami funkciją unset() ištriname visus elementus, turinčius porinį indeksą
foreach ($masyvas as $indeksas => $reiksme) {
    if ($indeksas % 2 == 0) {
        unset($masyvas[$indeksas]);
    }
}

print_r($masyvas);



?><br><br>

echo'_3uzduotis_';<br>
<?php
// Inicializuojam masyvą
$m1 = [];
$length = 200;

// Generuojame atsitiktines raides ir pridedame į masyvą
for ($i = 0; $i < $length; $i++) {
    $randomLetter = chr(rand(65, 68)); // Atsitiktinė raidė A, B, C arba D
    $m1[] = $randomLetter;
}

// Suskaičiuojame kiekvienos raidės pasikartojimus
$counts = array_count_values($m1);   //funkcija array_count_values() suskaičiuoti kiekvienos raidės pasikartojimus masyve.

// Išvedame rezultatus
foreach ($counts as $letter => $count) {
    echo "Raidė $letter pasikartoja $count kartus. <br>";
}
?><br><br>

echo'_4uzduotis-';<br>
<?php
// Masyvas su raidėmis
$m1 = ['B', 'D', 'A', 'C', 'B', 'A', 'D', 'C'];

// Funkcija rūšiuoti raidėmis
function compareLetters($a, $b) //funkcija compareLetters() palygina du elementus ir grąžina reikiamą reikšmę, kad būtų atliktas rūšiavimas pagal abėcėlę. 
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Rūšiuojame masyvą pagal abėcėlę
usort($m1, 'compareLetters');// funkciją usort(), kuri leidžia  nurodyti savo rūšiavimo funkciją. 

// Išvedame surūšiuotą masyvą
foreach ($m1 as $letter) {
    echo $letter . " ";
}
?><br><br>

echo'_5uzduotis-';<br>
<?php
// Sukuriamas masyvas
$raides = ['A', 'B', 'C', 'D'];
$masyvas1 = [];
$masyvas2 = [];
$masyvas3 =[];

// Užpildomi masyvai atsitiktinėmis raidėmis
for ($i = 0; $i < 200; $i++) {
    $masyvas1[] = $raides[array_rand($raides)];
    $masyvas2[] = $raides[array_rand($raides)];
    $masyvas3[] = $raides[array_rand($raides)];
}

// Suskaičiuojama kiek yra kiekvienos raidės
$raides_masyve1 = array_count_values($masyvas1);
$raides_masyve2 = array_count_values($masyvas2);
$raides_masyve3 = array_count_values($masyvas3);

// Sudedamos atitinkamos reikšmės iš masyvų
$sujungtas_masyvas = array_merge($masyvas1, $masyvas2, $masyvas3);

// Skaičiuojama kiek unikalių reikšmių gauta
$unikalios_reiksmes = count(array_unique($sujungtas_masyvas));

// Skaičiuojama kiek unikalių kombinacijų gauta
$unikalios_kombinacijos = count(array_unique($sujungtas_masyvas, SORT_REGULAR));

// Spausdinami rezultatai
echo "Masyvas 1: " . implode(", ", $masyvas1) . "<br>";
echo "Masyvas 2: " . implode(", ", $masyvas2) . "<br>";
echo "Masyvas 3: " . implode(", ", $masyvas3) . "<br><br>";

echo "Raidžių skaičius masyve 1:<br>";
foreach ($raides_masyve1 as $raide => $skaicius) {
    echo "$raide: $skaicius<br>";
}

echo "<br>Raidžių skaičius masyve 2:<br>";
foreach ($raides_masyve2 as $raide => $skaicius) {
    echo "$raide: $skaicius<br>";
}

echo "<br>Raidžių skaičius masyve 3:<br>";
foreach ($raides_masyve3 as $raide => $skaicius) {
    echo "$raide: $skaicius<br>";
}

echo "<br>Unikalių reikšmių skaičius: $unikalios_reiksmes<br>";
echo "Unikalių kombinacijų skaičius: $unikalios_kombinacijos";
?><br>

echo'_6uzduotis_';<br>
<?php
// Funkcija, kuri sugeneruoja atsitiktinį unikalų skaičių masyve
function generateUniqueRandomNumbers($min, $max, $count) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $count);
}

// Sugeneruojame pirmą masyvą
$m1 = generateUniqueRandomNumbers(100, 999, 100);

// Sugeneruojame antrą masyvą
$m2 = generateUniqueRandomNumbers(100, 999, 100);

// Spausdiname pirmą masyvą
echo "Pirmas masyvas:\n";
print_r($m1);

// Spausdiname antrą masyvą
echo "Antras masyvas:\n";
print_r($m2);

?><br><br>

echo'_7uzduotis_';<br>

<?php

// Pirmo ir antro masyvo kūrimas (pasikartojantys kodai iš ankstesnio uždavinio)
function sugeneruotiNumeriai($min, $max, $count) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $count);
}

$m1 =sugeneruotiNumeriai(100, 999, 100);
$am2 = sugeneruotiNumeriai(100, 999, 100);

// Masyvo, kuris būtų sudarytas iš reikšmių, esančių pirmame masyve, bet nėra antrame masyve, sukūrimas
$uniqueValues = array_diff($m1, $m2);

// Spausdiname rezultatą
echo "Masyvas, sudarytas iš reikšmių, esančių pirmame masyve, bet nėra antrame masyve:<br>";
print_r($uniqueValues);

?><br>

echo'_8uzduotis';<br>
<?php
function atsitiktinaiNumeriai($min, $max, $count) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $count);
}

$m1=atsitiktinaiNumeriai(100, 999, 100);
$m2 =atsitiktinaiNumeriai(100, 999, 100);
// Masyvas, kuris būtų sudarytas iš elementų, kurie kartojasi abiejuose masyvuose, sukūrimas
$intersectValues = array_intersect($m1, $m2);

// Spausdiname rezultatą
echo "Masyvas, sudarytas iš elementų, kurie kartojasi abiejuose masyvuose:\n";
print_r($intersectValues);

?><br>

echo'_9uzduotis_';<br>
<?php
// Sugeneruojame du masyvus su unikaliais atsitiktiniais skaičiais
$m1 = generateUniqueRandomArray(100, 100, 999);
$m2 = generateUniqueRandomArray(100, 100, 999);

// Sukuriame trečią masyvą, kurio indeksus sudaro pirmo masyvo reikšmės, o reikšmės yra antrojo masyvo reikšmės
$m3 = [];
for ($i = 0; $i < 6; $i++) {
    $index = $m1[$i];
    $value = $m2[$i];
    $m3[$index] = $value;
}

// Spausdiname trečią masyvą
print_r($m3);

// Funkcija generuojanti unikalų atsitiktinių skaičių masyvą
function generateUniqueRandomArray($length, $min, $max)
{
    $array = [];
    while (count($array) < $length) {
        $number = mt_rand($min, $max);
        if (!in_array($number, $array)) {
            $array[] = $number;
        }
    }
    return $array;
}
?><br>

echo'_10uzduotis_';<br>
<?php
// Inicializuojame masyvą
$skaiciai=[];
//$skaiciai = array();
// Sugeneruojame du pirmus skaičius
$pirmas = rand(5, 25);
$antras = rand(5, 25);
$skaiciai[] = $pirmas;
$skaiciai[] = $antras;

// Generuojame likusius skaičius pagal taisyklę
for ($i = 2; $i < 10; $i++) {
    $suma = $skaiciai[$i-1] + $skaiciai[$i-2];
    $skaiciai[] = $suma;
}

// Atspausdiname rezultatą
print_r($skaiciai);
?>








