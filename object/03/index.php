<?php
require __DIR__.'/Kibiras2.php';



$kibiras1 = new Kibiras2();
$kibiras2 = new Kibiras2();
$kibiras3 = new Kibiras2();

$kibiras1->prideti1Akmeni();
$kibiras1->prideti1Akmeni();
$kibiras2->prideti1Akmeni();


echo "Kibiras 1 akmenų kiekis: " . $kibiras1->gautiAkmenuKieki() . "<br>";
echo "Kibiras 2 akmenų kiekis: " . $kibiras2->gautiAkmenuKieki() . "<br>";
echo "Kibiras 3 akmenų kiekis: " . $kibiras3->gautiAkmenuKieki() . "<br>";
echo "Akmenų kiekis visuose Kibiruose: " . Kibiras2::gautiAkmenuKiekiVisuoseKibiruose() . "<br>";