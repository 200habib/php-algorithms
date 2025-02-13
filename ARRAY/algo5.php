<?php
// Simulating the roll of a 6-sided die
$dice = rand(1, 6);

// Defining the events
$A = [2, 4, 6];  // Even numbers
$Ac = [1, 3, 5]; // Odd numbers

// Checking the result
if (in_array($dice, $A)) {
    echo "The result is $dice, which belongs to event A (even number).";
} else {
    echo "The result is $dice, which belongs to the complement Ac (odd number).";
}
?>
