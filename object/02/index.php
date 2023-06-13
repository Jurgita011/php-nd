<?php
echo '<pre>';

require __DIR__ . '/Pinigine.php';


$manoPinigine = new Pinigine;

$manoPinigine->ideti(5);
$manoPinigine->ideti(1);
$manoPinigine->ideti(1);
$manoPinigine->ideti(10);
$manoPinigine->ideti(500);

$manoPinigine->skaiciuoti();