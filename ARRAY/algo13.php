<?php

// "What is the largest number in nums?".

<?php
$numbers = [10, 5, 8];
if (empty($numbers)) die("void !"); 

$maxNumber = $numbers[0];

foreach ($numbers as $num) {
    if ($num > $maxNumber) {
        $maxNumber = $num;
    }
}

echo "Max: $maxNumber";
