<?php
/*
Sukurti klasę Grybas.
 Sukurti klasę Krepsys.
 Krepsys turi konstantą DYDIS lygią 500. 
 Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris.
Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip: valgomas- true arba false, 
sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, 
 t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą,
kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų (gali būti biški daugiau nei DYDIS).
*/
require __DIR__ .'/Grybas.php';
require __DIR__ .'/Krepsys.php';

$krepsys1 = new Krepsys;

do{
    $grybas = new Grybas;
   if($grybas->arGeras()){
    $krepsys1->ideti($grybas->svoris);
    echo 'Idetas grybukas :'.$grybas->svoris.'<br>';
   }
}while(!$krepsys1 -> arPilnas());

echo 'Pririnkta grybų, g: '. $krepsys1->kiekis;
echo '<br>';

// echo $grybas1->svoris;
// echo Krepsys::DYDIS ;