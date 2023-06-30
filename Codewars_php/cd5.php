<?php
function expanded_form(int $n): string {
    $digits = str_split(strval($n));
    $result = [];

    for ($i = 0; $i < count($digits); $i++) {
        if ($digits[$i] != '0') {
            $result[] = $digits[$i] . str_repeat('0', count($digits) - $i - 1);
        }
    }

    return implode(' + ', $result);
}
echo expanded_form(12);  // Output: "10 + 2"
echo expanded_form(42);  // Output: "40 + 2"
echo expanded_form(70304);  // Output: "70000 + 300 + 4"
