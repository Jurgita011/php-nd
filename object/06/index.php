<?php
echo '<pre>';

require __DIR__. '/Stikline.php';


$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);

$stikline1-> ipilti (50);
$stikline1-> ipilti (180);
$stikline2->ipilti($stikline1->ispilti());
$stikline3->ipilti($stikline2->ispilti());


//$puodas = $stikline1->ispilti();



var_dump($stikline1);
var_dump($stikline2);
var_dump($stikline3);
//echo $puodas;
