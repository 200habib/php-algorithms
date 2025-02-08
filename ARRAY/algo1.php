<?php
// Exercise 1: Sum of Array Elements
// Write a PHP function that takes an array of numbers and returns the sum of all elements.

function sumArray($array) {
    return array_sum($array);
}

$numbers = [1, 2, 3, 4, 5];
echo sumArray($numbers); // Output: 15
