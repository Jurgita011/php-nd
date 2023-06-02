echo  '<pre>';

echo '______1u______';<br>

<?php
$vardas = "Jurgita";
$pavarde = "Leimonaite";
$gimimoMetai = 1978;
$siuMetai = 2023;

$amzius = $siuMetai - $gimimoMetai;

echo "Aš esu $vardas $pavarde. Man yra $amzius metai.";
?>;

echo '______2u______'<br>;

<?php
$pirmaReiksme = rand(0, 4);
$antraReiksme = rand(0, 4);

if ($pirmaReiksme > $antraReiksme) {
    $rezultatas = round($pirmaReiksme / $antraReiksme, 2);
} else {
    $rezultatas = round($antraReiksme / $pirmaReiksme, 2);
}

echo "Rezultatas: $rezultatas";
?>



echo '______3u______';<br><br><br>

<?php
$pirmasKintamasis = rand(0, 25);
$antrasKintamasis = rand(0, 25);
$treciasKintamasis = rand(0, 25);
// Rasti vidurinį kintamąjį
if (($pirmasKintamasis > $antrasKintamasis && $pirmasKintamasis < $treciasKintamasis) || ($pirmasKintamasis < $antrasKintamasis && $pirmasKintamasis > $treciasKintamasis)) {
    $vidurinisKintamasis = $pirmasKintamasis;
} elseif (($antrasKintamasis > $pirmasKintamasis && $antrasKintamasis < $treciasKintamasis) || ($antrasKintamasis < $pirmasKintamasis && $antrasKintamasis > $treciasKintamasis)) {
    $vidurinisKintamasis = $antrasKintamasis;
} else {
    $vidurinisKintamasis = $treciasKintamasis;
}
echo "Vidurinė reikšmė: $vidurinisKintamasis";
?>

echo '______4u______';<br><br><br>
<?php
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "Kraštinės ilgiai: a = $a, b = $b, c = $c\n";

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo "Trikampis gali būti sudarytas.";
} else {
    echo "Trikampio sudaryti negalima.";        //Jei sąlyga tenkinama, spausdinamas pranešimas "Trikampis gali būti sudarytas.". 
                                                //Kitu atveju, spausdinamas pranešimas "Trikampio sudaryti negalima.".
}

?>



-- echo'__________5u_________';<br><br><br>
<?php
$kiekis0 = 0;
$kiekis1 = 0;
$kiekis2 = 0;
$sk1 = rand(0, 2);
$sk2 = rand(0, 2);
$sk3 = rand(0, 2);
$sk4 = rand(0, 2);
if ($sk1 == 0) {
    $kiekis0++;
} elseif ($sk1 == 1) {
    $kiekis1++;
} else {
    $kiekis2++;
}
if ($sk2 == 0) {
    $kiekis0++;
} elseif ($sk2 == 1) {
    $kiekis1++;
} else {
    $kiekis2++;
}
if ($sk3 == 0) {
    $kiekis0++;
} elseif ($sk3 == 1) {
    $kiekis1++;
} else {
    $kiekis2++;
}
if ($sk4 == 0) {
    $kiekis0++;
} elseif ($sk4 == 1) {
    $kiekis1++;
} else {
    $kiekis2++;
}
echo "Nulių kiekis: $kiekis0\n";
echo "Vienetų kiekis: $kiekis1\n";
echo "Dvejetų kiekis: $kiekis2\n";
?>

echo'_______6u___';<br><br>
<?php
$atsitiktinisSkaicius = rand(1, 6);

echo "<h$atsitiktinisSkaicius>$atsitiktinisSkaicius</h$atsitiktinisSkaicius>";
?>

echo'__________7u_______;<br><br>
<?php
$sk1 = rand(-10, 10);
$sk2 = rand(-10, 10);
$sk3 = rand(-10, 10);

echo "<span style='color:";
echo ($sk1 < 0) ? "green" : (($sk1 == 0) ? "red" : "blue");
echo "'>$sk1</span>";

echo "<span style='color:";
echo ($sk2 < 0) ? "green" : (($sk2 == 0) ? "red" : "blue");
echo "'>$sk2</span>";

echo "<span style='color:";
echo ($sk3 < 0) ? "green" : (($sk3 == 0) ? "red" : "blue");
echo "'>$sk3</span>";
?>

echo'______8u____________;<br><br>
<?php
$kiekis = rand(5, 3000); // Generuojamas žvakių kiekis
$kaina = $kiekis * 1; // Skaičiuojama pradinė žvakių kaina

$nuolaida = 0; // Pradinė nuolaida

if ($kaina > 1000) {
    $nuolaida = 0.03;
} elseif ($kaina > 2000) {
    $nuolaida = 0.04;
}

$nuolaidosSuma = $kaina * $nuolaida; // Skaičiuojama nuolaidos suma
$galutineKaina = $kaina - $nuolaidosSuma; // Skaičiuojama galutinė kaina

echo "Perkama žvakių kiekis: $kiekis\n";
echo "Pradinė kaina: $kaina EUR\n";
echo "Taikoma nuolaida: " . ($nuolaida * 100) . "%\n";
echo "Nuolaidos suma: $nuolaidosSuma EUR\n";
echo "Galutinė kaina: $galutineKaina EUR\n";
?>

echo'__________9u______';<br><br>

<?php
$sk1 = rand(0, 100);
$sk2 = rand(0, 100);
$sk3 = rand(0, 100);

$vidurkis = ($sk1 + $sk2 + $sk3) / 3; // Aritmetinis vidurkis

if ($sk1 < 10 || $sk1 > 90) {
    $vidurkis -= $sk1 / 3;
}
if ($sk2 < 10 || $sk2 > 90) {
    $vidurkis -= $sk2 / 3;
}
if ($sk3 < 10 || $sk3 > 90) {
    $vidurkis -= $sk3 / 3;
}
$vidurkis = round($vidurkis); // Suapvalinamas vidurkis iki sveiko skaičiaus
echo "Aritmetinis vidurkis: $vidurkis\n";
?>

echo'___________10u__________';<br><br>
<?php
$hours = rand(0, 23); // Sugeneruojamos atsitiktinės valandos (0-23)
$minutes = rand(0, 59); // Sugeneruojamos atsitiktinės minutės (0-59)
$seconds = rand(0, 59); // Sugeneruojamos atsitiktinės sekundės (0-59)

$time = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds); // Sudaromas pradinis laikas

echo "Pradinis laikas: $time\n";

$additionalSeconds = rand(0, 300); // Sugeneruojamos papildomos sekundės (0-300)

$timeInSeconds = $hours * 3600 + $minutes * 60 + $seconds; // Pradinis laikas sekundėmis
$timeInSeconds += $additionalSeconds; // Pridedamos papildomos sekundės

$newHours = floor($timeInSeconds / 3600); // Apskaičiuojamos naujos valandos
$newMinutes = floor(($timeInSeconds % 3600) / 60); // Apskaičiuojamos naujos minutės
$newSeconds = $timeInSeconds % 60; // Apskaičiuojamos naujos sekundės

$newTime = sprintf("%02d:%02d:%02d", $newHours, $newMinutes, $newSeconds); // Sudaromas laikas po sekundžių pridėjimo

echo "Laikas po sekundžių pridėjimo: $newTime\n";
echo "Pridėtos sekundės: $additionalSeconds\n";
?>
