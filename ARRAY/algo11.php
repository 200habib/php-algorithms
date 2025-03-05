<?php
function filterArray($array, $threshold) {
    return array_filter($array, function($value) use ($threshold) {
        return $value > $threshold; // Keep values greater than the threshold
    });
}

$numbers = [10, 20, 30, 40, 50];
$threshold = 25;
print_r(filterArray($numbers, $threshold));
?>
