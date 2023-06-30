<?php

function toWeirdCase($string) {
    $words = explode(' ', $string);
    $result = [];

    foreach ($words as $word) {
        $characters = str_split($word);
        $length = count($characters);

        for ($i = 0; $i < $length; $i++) {
            if ($i % 2 == 0) {
                $result[] = strtoupper($characters[$i]);
            } else {
                $result[] = strtolower($characters[$i]);
            }
        }

        $result[] = ' ';
    }

    // Pašaliname paskutinį tarpą iš rezultato
    array_pop($result);

    return implode('', $result);
}
echo toWeirdCase("String");  // Rezultatas: "StRiNg"
echo toWeirdCase("Weird string case");  // Rezultatas: "WeIrD StRiNg CaSe"
