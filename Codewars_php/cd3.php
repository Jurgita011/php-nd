<?php function people_with_age_drink(int $old): string {
    if ($old < 14) {
        return "drink toddy";
    } elseif ($old < 18) {
        return "drink coke";
    } elseif ($old < 21) {
        return "drink beer";
    } else {
        return "drink whisky";
    }
}

echo people_with_age_drink(13). '<br>';  // Output: "drink toddy"
echo people_with_age_drink(17).'<br>';  // Output: "drink coke"
echo people_with_age_drink(18).'<br>';  // Output: "drink beer"
echo people_with_age_drink(20).'<br>';  // Output: "drink beer"
echo people_with_age_drink(30).'<br>';  // Output: "drink whisky"
