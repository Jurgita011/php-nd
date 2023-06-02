
echo'___1___';<br><br>

<?php
$name = 'Vitalijus';
$last_name = 'Cololo';

$shorter_name = strlen($name) > strlen($last_name) ? $name : $last_name;
echo $shorter_name;
?><br>

echo'___2___';<br><br>
<?php
$vardas = 'Brad'; 
$pavarde = 'Pitt'; 

$vardas_didziosiomis = strtoupper($vardas);//strtoupper() - pakeicia mazasias ir didziasias raides ir priskiria kintamajam 
$pavarde_mazosiomis = strtolower($pavarde);

echo $vardas_didziosiomis; 
echo $pavarde_mazosiomis; 
?><br>

echo'___3___';<br><br>
<?php
$vardas = 'Marius'; 
$pavarde = 'Jampolskis'; 

$pirmos_raides = substr($vardas, 0, 1) . substr($pavarde, 0, 1);

echo $pirmos_raides; // Spausdinama stringa, sudarytas iš pirmų vardo ir pavardės raidžių
?><br><br><br>

 echo '_______4______';<br><br>
 <?php
 $vardas = 'Vytautas'; 
 $pavarde = 'Sapranauskas'; 
 
 $paskutines_raides = substr($vardas, -3) . substr($pavarde, -3);
 
 echo $paskutines_raides; // Spausdinama stringa, sudarytas iš trijų paskutinių vardo ir pavardės raidžių
 ?><br><br><br>

 echo '_______5______';<br><br>

 <?php
 $sakinys = "An American in Paris";
 $pakeistas_sakinys = str_ireplace("a", "*", $sakinys);
 
 echo $pakeistas_sakinys; // Spausdinamas sakinys, kuriame visos "a" raides pakeistos žvaigždutėmis
 ?><br><br><br>

 echo '_______6______';<br><br>
 <?php
 $sakinys = "An American in Paris";
 $kiekis = substr_count(strtolower($sakinys), "a");//strtolower() funkciją, kad paverstume visas raides $sakinys eilutėje į mažąsias. Tai leidžia mums suskaičiuoti tiek didžiąsias, tiek mažąsias "a" raides.
 //substr_count() funkciją, kad suskaičiuotume, kiek kartų pasikartoja "a" raides $sakinys eilutėje
 echo $kiekis; // Spausdinamas "a" raidžių skaičius
 ?><br><br><br>
  echo '_______7______';<br><br>
  <?php
$stringai = [
    "An American in Paris",
    "Breakfast at Tiffany's",
    "2001: A Space Odyssey",
    "It's a Wonderful Life"
];

foreach ($stringai as $stringas) {
    $be_balsiu = preg_replace('/[aeiou]/i', '', $stringas);
    echo $be_balsiu . "<br>";
}
  ?><br><br><br>
  echo '_______8______';<br><br>
  <?php
  $stringas = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';

  preg_match('/Episode\s+(\d+)/', $stringas, $rezultatas);
  
  if (isset($rezultatas[1])) {
      echo $rezultatas[1]; // Spausdinamas epizodo numeris
  }
  ?><br><br><br>
   echo '_______9______';<br><br>
   <?php
$stringas1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$stringas2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$zodziu_kiekis1 = skaiciuotiZodzius($stringas1);
$zodziu_kiekis2 = skaiciuotiZodzius($stringas2);

echo "Stringe 1 yra {$zodziu_kiekis1} žodžių trumpesnių arba lygių nei 5 raidės.<br>";
echo "Stringe 2 yra {$zodziu_kiekis2} žodžių trumpesnių arba lygių nei 5 raidės.<br>";

function skaiciuotiZodzius($stringas) {
    $zodziai = explode(" ", $stringas);
    $kiekis = 0;

    foreach ($zodziai as $zodis) {
        $zodis_be_skaiciu = preg_replace('/[^a-zA-Z]/', '', $zodis);
        if (strlen($zodis_be_skaiciu) <= 5) {
            $kiekis++;
        }
    }

    return $kiekis;
}
   ?><br><br><br>
    echo '_______10______';<br><br>
    <?php
    function generuotiAtsitiktiniStringa() {
        $abėcėlė = 'abcdefghijklmnopqrstuvwxyz';
        $ilgis = 3;
        $stringas = '';
    
        for ($i = 0; $i < $ilgis; $i++) {
            $indeksas = rand(0, strlen($abėcėlė) - 1);
            $simbolis = $abėcėlė[$indeksas];
            $stringas .= $simbolis;
        }
    
        return $stringas;
    }
    
    $atsitiktinisStringas = generuotiAtsitiktiniStringa();
    echo $atsitiktinisStringas;
    ?>