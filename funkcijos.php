echo '<pre>';
echo'_1uzduotis_';<br>
<?php
function pasisveikinimas($t) {
    echo "<h1>$t</h1>";
}
$tekstas= 'labas vakaras !';
pasisveikinimas($tekstas); //galima rasyti dviems budais ir gausim paimta teksta teisingai
pasisveikinimas( 'labas rytas!');
?><br><br>
echo '<pre>';
echo'_2uzduotis_';<br>
<?php
function pasisveikinimasTag($text) {
    echo "<h1>$text</h1>";
}
function sprendimasTag($text, $tagNumber) {
    if ($tagNumber >= 1 && $tagNumber <= 6) {
        $tagName = "h$tagNumber";
        echo "<$tagName>$text</$tagName>";
    } else {
        echo "Netinkamas tago numeris. Prašome ivesti skaiciu nuo 1 iki 6.";
    }
}
pasisveikinimasTag("Labas, rytas!");

sprendimasTag("Siandien pamoku nebus.", 3);
?><br><br>
echo '<pre>';
echo'_3uzduotis_';<br>
<?php
function miskas($skaicius) {
    // Tikriname, ar įvestas argumentas yra sveikas skaičius
    if (!is_int($skaicius)) {
        return "Klaida: Įveskite sveiką skaičių.";
    }

    
    // Inicializuojame kintamąjį, skirtą saugoti dalijimų be liekanos skaičių
    $miskas = 0;

    // Einame per skaičių diapazoną nuo 2 iki argumento - 1
    for ($i = 2; $i < $skaicius; $i++) {
        // Tikriname, ar skaičius dalijasi be liekanos
        if ($skaicius % $i == 0) {
            $miskas++;
        }
    }

    return $miskas;
}

$stringas = md5(time());

$keisti = function($sutapimas) {
    $skaicius = intval($sutapimas[0]);
     $miskas= dalijasiBeLiekanos($skaicius);
    return "<h1>{$sutapimas[0]}</h1>";
};

$atgal = preg_replace_callback('/\d+/', $keisti, $stringas);

echo $atgal;

?><br><br>

echo'_4uzduotis_';<br>
<?php
function dalijasiBeLiekanos($skaicius) {
    // Tikriname, ar ivestas argumentas yra sveikas skaicius
    if (!is_int($skaicius)) {
        return "Klaida: Iveskite sveika skaiciu.";
    }

    // Inicializuojame kintamaji, skirta saugoti dalijimu be liekanos skaiciu
    $dalijasiBeLiekanos = 0;

    // Einame per skaiciu diapazona nuo 2 iki argumento - 1
    for ($i = 2; $i < $skaicius; $i++) {
        // Tikriname, ar skaicius dalijasi be liekanos
        if ($skaicius % $i == 0) {
            $dalijasiBeLiekanos++;
        }
    }

    return $dalijasiBeLiekanos;
}

// Pavyzdžiai
echo dalijasiBeLiekanos(10);  // Rezultatas: 3 (dalijasi iš 2, 5 ir 10)
echo dalijasiBeLiekanos(15);  // Rezultatas: 2 (dalijasi iš 3 ir 5)
echo dalijasiBeLiekanos(7);   // Rezultatas: 0 (nepasidalija be liekanos su jokiais skaiciais)
?><br><br>
echo'_5uzduotis_';<br>
<?php
// Funkcija, grazinanti dalikliu be liekanos skaiciu
function dalikliuBeLiekanos($skaicius) {
    $dalikliaiBeLiekanos = 0;
    for ($i = 1; $i <= $skaicius; $i++) {
        if ($skaicius % $i == 0) {
            $dalikliaiBeLiekanos++;
        }
    }
    return $dalikliaiBeLiekanos;
}

// Sukuriamas masyvas
$masyvas = [];
for ($i = 0; $i < 100; $i++) {
    $skaicius = rand(33, 77);
    $masyvas[] = $skaicius;
}

// Isrusiuojamas masyvas pagal dalikliu be liekanos kieki mazejimo tvarka
usort($masyvas, function($a, $b) {
    return dalikliuBeLiekanos($b) - dalikliuBeLiekanos($a);
});

// Spausdinamas isrūsiuotas masyvas
print_r($masyvas);
?>
echo'_6uzduotis_';<br>
<?php

// Funkcija, grąžinanti daliklių be liekanos skaičių
function atsitiktiniai($skaicius) {
    $dalikliaiBeLiekanos = 0;
    for ($i = 1; $i <= $skaicius; $i++) {
        if ($skaicius % $i == 0) {
            $dalikliaiBeLiekanos++;
        }
    }
    return $dalikliaiBeLiekanos;
}

// Sukuriamas masyvas
$masyvas = [];
for ($i = 0; $i < 100; $i++) {
    $skaicius = rand(333, 777);
    $masyvas[] = $skaicius;
}

// Ištrinami pirminiai skaičiai iš masyvo
for ($i = 0; $i < count($masyvas); $i++) {
    if (dalikliuBeLiekanos($masyvas[$i]) == 2) {
        unset($masyvas[$i]);
    }
}

// "Perindeksuojame" masyvą
$masyvas = array_values($masyvas);

// Spausdinamas masyvas be pirminių skaičių
print_r($masyvas);
?><br>

echo'_7uzduotis_';<br>
<?php
// Funkcija, kuri sugeneruoja atsitiktinio ilgio masyvą, išskyrus paskutinį elementą
function generuotiMasyva() {
    $ilgis = rand(10, 20);
    $masyvas = [];
    for ($i = 0; $i < $ilgis - 1; $i++) {
        $elementas = rand(0, 10);
        $masyvas[] = $elementas;
    }
    return $masyvas;
}

// Funkcija, kuri sugeneruoja paskutinį masyvą, kurio paskutinis elementas lygus 0
function generuotiPaskutiniMasyva() {
    $ilgis = rand(10, 20);
    $masyvas = generuotiMasyva();
    $masyvas[] = 0;
    return $masyvas;
}

// Kartojame nuo 10 iki 30 kartų ir spausdiname rezultatus
$kartai = rand(10, 30);
for ($i = 0; $i < $kartai; $i++) {
    if ($i == $kartai - 1) {
        $masyvas = generuotiPaskutiniMasyva();
    } else {
        $masyvas = generuotiMasyva();
    }
    echo "Masyvas $i: ";
    print_r($masyvas);
    echo "<br>";
}
?><br>

echo'_8uzduotis_';<br>
<?php
//  funkcija skaičiuojanti elementų kurie nėra masyvai sumą
function skaiciuotiElementuSuma($masyvas) {
    $suma = 0;
    foreach ($masyvas as $elementas) {
        if (is_array($elementas)) {
            $suma += skaiciuotiElementuSuma($elementas);
        } else {
            $suma += $elementas;
        }
    }
    return $suma;
}
// Septinto uždavinio masyvas su submasyvais
$septintoMasyvas = [
    1,
    [2, 3, [4, 5]],
    6,
    [7, 8, [9, [10, 11]]],
    12
];

// Skaičiuojame elementų sumą
$elementuSuma = skaiciuotiElementuSuma($septintoMasyvas);

echo "Elementų suma: " . $elementuSuma;
?><br><br>

echo'_9uzduotis_';<br>
<?php
function arPirminis($sk) {
    if ($sk < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($sk); $i++) {
        if ($sk % $i === 0) {
            return false;
        }
    }

    return true;
}

$masyvas = [];

do {
    $masyvas = [];

    for ($i = 0; $i < 3; $i++) {
        $skaicius = rand(1, 33);
        $masyvas[] = $skaicius;
    }

    $paskutiniaiElementai = array_slice($masyvas, -3);

    $nePirminiai = false;
    foreach ($paskutiniaiElementai as $elementas) {
        if (!arPirminis($elementas)) {
            $nePirminiai = true;
            break;
        }
    }

    if ($nePirminiai) {
        $skaicius = rand(1, 33);
        $masyvas[] = $skaicius;
    }
} while ($nePirminiai);

print_r($masyvas);
?><br>


echo'_10uzduotis_';<br>
<?php
// Funkcija, kuri tikrina ar skaičius yra pirminis
function pirminis($sk) {
    if ($sk < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($sk); $i++) {
        if ($sk % $i == 0) {
            return false;
        }
    }
    return true;
}

// Sukuriamas pradinis masyvas
$masyvas = [];
for ($i = 0; $i < 10; $i++) {
    $submasyvas = [];
    for ($j = 0; $j < 10; $j++) {
        $skaicius = rand(1, 100);
        $submasyvas[] = $skaicius;
    }
    $masyvas[] = $submasyvas;
}

// Patikrinama sąlyga ir vykdomas ciklas tol, kol pirminių skaičių vidurkis yra mažesnis nei 70
while (rastiPirminiVidurki($masyvas) < 70) {
    $maziausias = rastiMaziausia($masyvas);
    foreach ($masyvas as &$submasyvas) {
        if (in_array($maziausias, $submasyvas)) {
            $indeksas = array_search($maziausias, $submasyvas);
            $submasyvas[$indeksas] += 3;
        }
    }
}

// Funkcija, kuri randa masyve mažiausią skaičių
function rastiMaziausia($masyvas) {
    $min = PHP_INT_MAX;
    foreach ($masyvas as $submasyvas) {
        $submaziausias = min($submasyvas);
        if ($submaziausias < $min) {
            $min = $submaziausias;
        }
    }
    return $min;
}

// Funkcija, kuri skaičiuoja pirminių skaičių vidurkį masyve
function rastiPirminiVidurki($masyvas) {
    $pirminiai = [];
    foreach ($masyvas as $submasyvas) {
        foreach ($submasyvas as $sk) {
            if (arPirminis($sk)) {
                $pirminiai[] = $sk;
            }
        }
    }
    if (count($pirminiai) > 0) {
        return array_sum($pirminiai) / count($pirminiai);
    }
    return 0;
}

// Spausdinamas galutinis masyvas
print_r($masyvas);
?>
     
     
      