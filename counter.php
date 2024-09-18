<?php
$objects = [4, 5, -3, 15, -2, 19, 6, -2, -4, 20, -17];

function analyzeArray($array) {
    [$positiveCount, $negativeCount, $oddCount, $evenCount] = [0, 0, 0, 0];

    foreach ($array as $num) {
        $num > 0 ? $positiveCount++ : ($num < 0 ? $negativeCount++ : null);
        $num % 2 == 0 ? $evenCount++ : $oddCount++;
    }

    return "Array has $negativeCount negative, $positiveCount positive, $oddCount odd, and $evenCount even numbers.";
}

echo analyzeArray($objects);
?>
