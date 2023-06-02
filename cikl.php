echo'___1___';<br>
<?php
$stars = str_repeat("*", 400); // Sukuriame eilutę su 400 žvaigždutėmis

// Skaičiuojame, kiek eilučių reikės, kad nebūtų daugiau nei 50 žvaigždžių vienoje eilutėje
$numRows = ceil(strlen($stars) / 50);

// Daliname eilutę į mažesnes eilutes
$dividedStars = str_split($stars, 50);

// Spausdiname kiekvieną mažesnę eilutę su stilizuojančiu HTML tagu
foreach ($dividedStars as $line) {
    echo '<div class="line">' . $line . '</div>';
}
?>
echo'___2___'<br>
<?php
$didziau_uz_150 = 0;

for ($i = 0; $i < 300; $i++) {
  $skaicius = rand(0, 300);
  
  if ($skaicius > 275) {
    echo '<span style="color: red;">'.$skaicius.'</span> ';
  } else {
    echo $skaicius.' ';
  }
  
  if ($skaicius > 150) {
    $didziau_uz_150++;
  }
}
echo "Didesnių už 150 skaičių kiekis: ".$didziau_uz_150;
echo "<br>";
?>
echo'___3___";<br>
<?php
$randomNumber = rand(3000, 4000);
$output = '';

for ($i = 1; $i <= $randomNumber; $i++) {
  if ($i % 77 === 0) {
    $output .= $i . ', ';
  }
}
// Pašaliname paskutinį kablelį ir tarpą
$output = rtrim($output, ', ');
echo '<div style="white-space: nowrap;">' . $output . '</div>';
?><br>

echo"_______4______"; 
 
<?php
$dydis = 10; // Kvadrato dydis
echo "<pre>";

// Kvadrato nupiešimas
for ($i = 0; $i < $dydis; $i++) {
  for ($j = 0; $j < $dydis; $j++) {
    echo "* ";
  }
  echo "\n";
}
?>
echo'_______5______';<br>
<?php
$dydis = 10; // Kvadrato dydis o skaicius turi buti 100 as ji pasidaraiu kad man butu lengviau matyti
echo "<pre>";
// Raudonų įstrižainių nupiešimas
for ($i = 0; $i < $dydis; $i++) {
  for ($j = 0; $j < $dydis; $j++) {
    if ($i == $j || $i == $dydis - 1 - $j) {
      echo "<span style='color: red'>* </span>";
    } else {
      echo "* ";
    }
  }
  echo "\n";
}

echo "</pre>";
?>
  echo'______6____'<br>;
  <?php
do {
    $coin = rand(0, 1);
    echo $coin;
} while ($coin !== 0);

echo '<br><br>';

$H = 0;
$S = 0;

do {
    $coin2 = rand(0, 1);
    if ($coin2 === 0) {
        echo 'H';
        $H = $H + 1;
    } else {
        echo 'S';
        $S++;
    }
} while ($H < 3);

echo '<br><br>';

$counter = 0;

do {
    $coin3 = rand(0, 1);
    if ($coin3 === 0) {
        echo 'H';
        $counter++;
    } else {
        echo 'S';
        $counter = 0;
    }
} while ($counter !== 3);
?>



echo'_____7____';<br>
<?php
$petrasPoints = 0;
$kazysPoints = 0;
while ($petrasPoints < 222 && $kazysPoints < 222) {
    $petrasPoints += rand(10, 20);
    $kazysPoints += rand(5, 25);
    echo "Petras: " . $petrasPoints . " taškų,<br> Kazys: " . $kazysPoints . " taškų";
    if ($petrasPoints >= 222 || $kazysPoints >= 222) {
        break;
    }
}
if ($petrasPoints >= 222 && $kazysPoints >= 222) {
    echo "Partiją laimėjo: Lygiosios!";
} elseif ($petrasPoints >= 222) {
    echo "Partiją laimėjo: Petras!";
} else {
    echo "Partiją laimėjo: Kazys!";
}

?><br>

echo'____8___';<br>
<?php
function randomColor() {
    $red = mt_rand(0, 255);
    $green = mt_rand(0, 255);
    $blue = mt_rand(0, 255);
    return "rgb($red, $green, $blue)";
}

$height = 21;
$midpoint = ($height - 1) / 2;

for ($row = 0; $row < $height; $row++) {
    for ($col = 0; $col < $height; $col++) {
        if (abs($col - $midpoint) <= $row && $col + $row >= $midpoint && $col - $row <= $midpoint && $col + $row <= $height + $midpoint - 1) {
            echo '<span style="color: ' . randomColor() . '">*</span>';
        } else {
            echo '*';
        }
    }
    echo '<br>';
}
?>
echo'___10__';<br>
<?php

function smugioDydis($min, $max) {
  return rand($min, $max) / 10;
}

function arPataike() {
  return rand(1, 100) <= 50;
}

function ikalkVinisMazaisSmugiais() {
  $viniesIlgis = 8.5;
  $smugiuSkaicius = 0;
  $ikalimoGylis = 0;

  while ($ikalimoGylis < $viniesIlgis) {
    $smugioDydis = smugioDydis(5, 20);
    $ikalimoGylis += $smugioDydis;
    $smugiuSkaicius++;
  }

  return $smugiuSkaicius;
}

function ikalkVinisDideliaisSmugiais() {
  $viniesIlgis = 8.5;
  $smugiuSkaicius = 0;
  $ikalimoGylis = 0;

  while ($ikalimoGylis < $viniesIlgis) {
    $smugioDydis = smugioDydis(20, 30);

    if (arPataike()) {
      $ikalimoGylis += $smugioDydis;
    }

    $smugiuSkaicius++;
  }

  return $smugiuSkaicius;
}

// Įkalkime vinis mažais smūgiais
$smugiuSkaiciusMazais = ikalkVinisMazaisSmugiais();
echo "Vinies įkalimas mažais smūgiais: {$smugiuSkaiciusMazais} smūgiai.\n";

// Įkalkime vinis dideliais smūgiais
$smugiuSkaiciusDideliais = ikalkVinisDideliaisSmugiais();
echo "Vinies įkalimas dideliais smūgiais: {$smugiuSkaiciusDideliais} smūgiai.\n";

?>










