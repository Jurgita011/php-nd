<?php
echo '<pre>';

require __DIR__ . '/Kibiras3.php';

$kibiras = new KibirasNePo1();

echo $kibiras->Prideti1Akmeni(); // Pridės atsitiktinį akmenų kiekį nuo 2 iki 5
echo $kibiras->KiekPririnktaAkmenu(); // Išves akmenų kiekį

echo $kibiras->Prideti1Akmeni(); // Pridės dar vieną atsitiktinį akmenį nuo 2 iki 5
echo $kibiras->KiekPririnktaAkmenu(); // Išves akmenų kiekį

 echo "Akmenų kiekis: <br>";
