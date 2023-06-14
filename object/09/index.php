<?php

require __DIR__.'/MarsoPalydovas.php';




$vardas1 = MarsoPalydovas::sukurtiObjekta();
echo "Pirmas objektas: " . $vardas1 . "\n";

$vardas2 = MarsoPalydovas::sukurtiObjekta();
echo "Antras objektas: " . $vardas2 . "\n";

$vardas3 = MarsoPalydovas::sukurtiObjekta();
echo "Trečias objektas: " . $vardas3 . "\n";



?>