<?php

function linearSearch($array, $target) {
    foreach ($array as $index => $value) {
        if ($value == $target) {
            return $index;
        }
    }
    return -1;
}

$array = [10, 20, 30, 40, 50];
$target = 30;
$result = linearSearch($array, $target);

echo $result; 
