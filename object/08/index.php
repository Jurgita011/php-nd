<?php
echo '<pre>';

require __DIR__ . '/Pinigine.php';

$pinigine = new Pinigine();

// Pridedame pinigus
$pinigine->ideti(1); // Pridedame 1 į metalinius pinigus
$pinigine->ideti(5); // Pridedame 5 į popierinius pinigus
$pinigine->ideti(3); // Pridedame 3 į popierinius pinigus
$pinigine->ideti(1); // Pridedame 1 į metalinius pinigus
$pinigine->ideti(10); // Pridedame 5 į popierinius pinigus
$pinigine->ideti(200);
// Skaičiuojame ir atspausdiname sumą
$pinigine->skaiciuoti();


?>