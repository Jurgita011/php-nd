<?php
/* (STATIC) Sukurti klasę Tenisininkas.
 Klasė Tenisininkas turi privačią savybę vardas,
 privačią savybę kamuoliukas(true jei turi ir false jei ne)
  privačią static savybę zaidejas1, 
  privačią static savybę zaidejas2 (žaidėjų objektams saugoti)  Klasė turi tokius metodus: 
A. Public arTuriKamuoliuka();
B. Public perduotiKamuoliuka() Perduoda kamuoliuką kitam Tenisininkas objektui;
C. Public static zaidimoPradzia() Perduoda kamuoliuką atsitiktiniam žaidėjo objektui;
Sukurti du Tenisininkas objektus. Kamuoliuko neturi nei vienas.
 Iškviesti statinį metodą zaidimoPradzia() ir kažkuriam žaidėjui priskirti kamuoliuką.
 Žaidėjo objekto metodu perduotiKamuoliuka() perduoti kamuoliuką kitam žaidėjui.
  Žaidėjas, kuris neturi kamuoliuko, perduoti kitam negali.
*/



echo '<pre>';

require __DIR__ . '/Tenisininkas.php';

$tenisininkas1 = Tenisininkas::getZaidejas('Tomas');
$tenisininkas2 = Tenisininkas::getZaidejas('Jonas');


Tenisininkas::zaidimoPradzia();

if ($tenisininkas1->arTuriKamuoliuka()) {
    echo 'Žaidimą pradėjo ' . $tenisininkas1->getZaidejoVardas();
} else {
    echo 'Žaidimą pradėjo ' . $tenisininkas2->getZaidejoVardas();
}

// var_dump($tenisininkas1);
// var_dump($tenisininkas2);

echo '<br>';

if ($tenisininkas1->arTuriKamuoliuka()) {
    $tenisininkas1->perduotiKamuoliuka();
} else {
    $tenisininkas2->perduotiKamuoliuka();
}



