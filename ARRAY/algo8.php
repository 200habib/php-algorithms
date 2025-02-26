<?php

# Not Jaden-Cased: "How can mirrors be real if our eyes aren't real"
# Jaden-Cased:     "How Can Mirrors Be Real If Our Eyes Aren't Real"


function toJadenCase(string $string): string
{
  
  
  $array = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);
  
for ($i = 0; $i < count($array); $i++) {
    $array[$i] = ucfirst($array[$i]);
}
  
  print_r($array);
  $resultString = implode(" ", $array);
  return $resultString;
}
<?php
// Function to convert a string to Jaden Case
function toJadenCase(string $string): string
{
    // 1. Split the string into an array of words
    // - Use preg_split to split the string at one or more spaces
    // - PREG_SPLIT_NO_EMPTY ensures no empty elements are included in the array
    $array = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);

    // 2. Loop through the array and capitalize the first letter of each word
    for ($i = 0; $i < count($array); $i++) {
        // Use ucfirst() to capitalize the first letter of each word
        $array[$i] = ucfirst($array[$i]);
    }

    // 3. Join the array of words into a single string, separated by spaces
    $resultString = implode(" ", $array);

    // 4. Return the transformed string
    return $resultString;
}

// Example usage
$inputString = "How can mirrors be real if our eyes aren't real";
$jadenCasedString = toJadenCase($inputString);

echo "Input: " . $inputString . "\n";
echo "Jaden-Cased: " . $jadenCasedString . "\n";
?>
