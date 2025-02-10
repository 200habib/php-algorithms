<?php
function isPalindrome($number) {
    $originalNumber = $number;
    $reversedNumber = 0;
    
    // Reverse the number
    while ($number > 0) {
        $digit = $number % 10;
        $reversedNumber = $reversedNumber * 10 + $digit;
        $number = (int)($number / 10);
    }
    
    // Compare the original number with the reversed number
    return $originalNumber === $reversedNumber;
}

// Example usage
$number = 12321;
if (isPalindrome($number)) {
    echo "$number is a palindrome number.";
} else {
    echo "$number is not a palindrome number.";
}
?>
